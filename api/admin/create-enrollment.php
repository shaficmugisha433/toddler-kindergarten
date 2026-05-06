<?php
declare(strict_types=1);

require_once __DIR__ . '/../../appli/bootstrap.php';
auth()->requireLogin();

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    ApiResponse::json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

$data = request_data();
$payload = [
    'student_name' => clean_string($data['student_name'] ?? ''),
    'date_of_birth' => clean_string($data['date_of_birth'] ?? ''),
    'class_name' => clean_string($data['class_name'] ?? ''),
    'enrollment_date' => clean_string($data['enrollment_date'] ?? ''),
    'parent_name' => clean_string($data['parent_name'] ?? ''),
    'parent_email' => clean_string($data['parent_email'] ?? ''),
    'parent_phone' => clean_string($data['parent_phone'] ?? ''),
    'notes' => clean_string($data['notes'] ?? ''),
    'status' => clean_string($data['status'] ?? 'active'),
];

foreach (['student_name', 'date_of_birth', 'class_name', 'enrollment_date', 'parent_name', 'parent_email'] as $field) {
    if ($payload[$field] === '') {
        ApiResponse::json(['success' => false, 'message' => 'Please complete all required enrollment fields.'], 422);
    }
}

if (!filter_var($payload['parent_email'], FILTER_VALIDATE_EMAIL)) {
    ApiResponse::json(['success' => false, 'message' => 'Parent email is invalid.'], 422);
}

try {
    $id = repo()->createEnrollment($payload);
    ApiResponse::json(['success' => true, 'message' => 'Enrollment created successfully.', 'id' => $id]);
} catch (Throwable $exception) {
    ApiResponse::json(['success' => false, 'message' => 'Unable to create enrollment.', 'error' => $exception->getMessage()], 500);
}
