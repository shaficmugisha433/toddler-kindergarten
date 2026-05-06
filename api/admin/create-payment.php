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
    'amount' => (float) ($data['amount'] ?? 0),
    'payment_date' => clean_string($data['payment_date'] ?? ''),
    'term_label' => clean_string($data['term_label'] ?? ''),
    'payment_method' => clean_string($data['payment_method'] ?? ''),
    'notes' => clean_string($data['notes'] ?? ''),
];

if ($payload['student_name'] === '' || $payload['payment_date'] === '' || $payload['term_label'] === '' || $payload['payment_method'] === '') {
    ApiResponse::json(['success' => false, 'message' => 'Please complete all required payment fields.'], 422);
}

if ($payload['amount'] <= 0) {
    ApiResponse::json(['success' => false, 'message' => 'Amount must be greater than zero.'], 422);
}

try {
    $id = repo()->createPayment($payload);
    ApiResponse::json(['success' => true, 'message' => 'Payment recorded successfully.', 'id' => $id]);
} catch (Throwable $exception) {
    ApiResponse::json(['success' => false, 'message' => 'Unable to record payment.', 'error' => $exception->getMessage()], 500);
}
