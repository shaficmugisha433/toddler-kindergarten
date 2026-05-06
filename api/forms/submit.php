<?php
declare(strict_types=1);

require_once __DIR__ . '/../../appli/bootstrap.php';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    ApiResponse::json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

try {
    $formType = clean_string($_POST['form_type'] ?? '');
    if ($formType === '') {
        ApiResponse::json(['success' => false, 'message' => 'Missing form type.'], 422);
    }

    if ($formType === 'contact') {
        $payload = [
            'full_name' => clean_string($_POST['contactName'] ?? ''),
            'email' => clean_string($_POST['contactEmail'] ?? ''),
            'phone' => clean_string($_POST['contactPhone'] ?? ''),
            'subject' => clean_string($_POST['contactSubject'] ?? ''),
            'message' => clean_string($_POST['contactMessage'] ?? ''),
        ];

        foreach (['full_name', 'email', 'subject', 'message'] as $field) {
            if ($payload[$field] === '') {
                ApiResponse::json(['success' => false, 'message' => 'Please fill in all required contact fields.'], 422);
            }
        }

        if (!filter_var($payload['email'], FILTER_VALIDATE_EMAIL)) {
            ApiResponse::json(['success' => false, 'message' => 'Please enter a valid email address.'], 422);
        }

        $id = repo()->createContact($payload);
        ApiResponse::json(['success' => true, 'message' => 'Your message has been sent successfully.', 'id' => $id]);
    }

    if ($formType === 'admission') {
        $payload = [
            'child_first_name' => clean_string($_POST['childFirstName'] ?? ''),
            'child_last_name' => clean_string($_POST['childLastName'] ?? ''),
            'child_dob' => clean_string($_POST['childDOB'] ?? ''),
            'child_gender' => clean_string($_POST['childGender'] ?? ''),
            'program_interest' => clean_string($_POST['programSelect'] ?? ''),
            'parent_first_name' => clean_string($_POST['parentFirstName'] ?? ''),
            'parent_last_name' => clean_string($_POST['parentLastName'] ?? ''),
            'parent_email' => clean_string($_POST['parentEmail'] ?? ''),
            'parent_phone' => clean_string($_POST['parentPhone'] ?? ''),
            'parent_address' => clean_string($_POST['parentAddress'] ?? ''),
            'relationship_to_child' => clean_string($_POST['relationship'] ?? ''),
            'preferred_contact_method' => clean_string($_POST['preferredContact'] ?? ''),
            'siblings' => clean_string($_POST['siblings'] ?? 'no'),
            'sibling_names' => clean_string($_POST['siblingNames'] ?? ''),
            'how_heard' => clean_string($_POST['howHeard'] ?? ''),
            'additional_notes' => clean_string($_POST['additionalNotes'] ?? ''),
            'terms_agree' => to_bool_flag($_POST['termsAgree'] ?? 0),
            'newsletter' => to_bool_flag($_POST['newsletter'] ?? 0),
            'documents_json' => null,
            'status' => 'new',
        ];

        foreach (['child_first_name', 'child_last_name', 'child_dob', 'child_gender', 'program_interest', 'parent_first_name', 'parent_last_name', 'parent_email', 'parent_phone', 'parent_address', 'relationship_to_child', 'preferred_contact_method'] as $field) {
            if ($payload[$field] === '') {
                ApiResponse::json(['success' => false, 'message' => 'Please complete all required admission fields.'], 422);
            }
        }

        if (!filter_var($payload['parent_email'], FILTER_VALIDATE_EMAIL)) {
            ApiResponse::json(['success' => false, 'message' => 'Please enter a valid parent email address.'], 422);
        }

        if ($payload['terms_agree'] !== 1) {
            ApiResponse::json(['success' => false, 'message' => 'You must accept the terms to submit.'], 422);
        }

        $uploadedFiles = [];
        foreach (['birthCert', 'vaccination', 'parentId', 'childPhotos'] as $name) {
            $file = save_admission_upload($name);
            if ($file !== null) {
                $uploadedFiles[$name] = $file;
            }
        }

        if ($uploadedFiles !== []) {
            $payload['documents_json'] = json_encode($uploadedFiles, JSON_UNESCAPED_SLASHES);
        }

        $id = repo()->createAdmission($payload);
        ApiResponse::json(['success' => true, 'message' => 'Application submitted successfully. We will contact you soon.', 'id' => $id]);
    }

    ApiResponse::json(['success' => false, 'message' => 'Unsupported form type.'], 422);
} catch (Throwable $exception) {
    ApiResponse::json(['success' => false, 'message' => 'Submission failed. Please try again.', 'error' => $exception->getMessage()], 500);
}

function save_admission_upload(string $inputName): ?array
{
    if (!isset($_FILES[$inputName])) {
        return null;
    }

    $file = $_FILES[$inputName];
    if (($file['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_NO_FILE) {
        return null;
    }

    if (($file['error'] ?? UPLOAD_ERR_OK) !== UPLOAD_ERR_OK) {
        ApiResponse::json(['success' => false, 'message' => "Upload failed for {$inputName}."], 422);
    }

    $maxSize = 5 * 1024 * 1024;
    $size = (int) ($file['size'] ?? 0);
    if ($size > $maxSize) {
        ApiResponse::json(['success' => false, 'message' => "{$inputName} exceeds the 5MB limit."], 422);
    }

    $allowed = ['pdf', 'jpg', 'jpeg', 'png'];
    $originalName = (string) ($file['name'] ?? '');
    $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));
    if (!in_array($ext, $allowed, true)) {
        ApiResponse::json(['success' => false, 'message' => "{$inputName} has an unsupported file type."], 422);
    }

    $dir = __DIR__ . '/../../storage/uploads/admissions';
    if (!is_dir($dir) && !mkdir($dir, 0775, true) && !is_dir($dir)) {
        ApiResponse::json(['success' => false, 'message' => 'Failed to prepare upload directory.'], 500);
    }

    $storedName = sprintf('%s_%s.%s', date('YmdHis'), bin2hex(random_bytes(4)), $ext);
    $destination = $dir . DIRECTORY_SEPARATOR . $storedName;

    if (!move_uploaded_file((string) ($file['tmp_name'] ?? ''), $destination)) {
        ApiResponse::json(['success' => false, 'message' => "Could not save {$inputName}."], 500);
    }

    return [
        'original_name' => $originalName,
        'stored_name' => $storedName,
        'relative_path' => 'storage/uploads/admissions/' . $storedName,
        'size' => $size,
        'mime_type' => (string) ($file['type'] ?? ''),
    ];
}
