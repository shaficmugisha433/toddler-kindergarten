<?php
declare(strict_types=1);

require_once __DIR__ . '/../../appli/bootstrap.php';
auth()->requireLogin();

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    ApiResponse::json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

$data = request_data();
$module = clean_string($data['module'] ?? '');
$id = (int) ($data['id'] ?? 0);

if ($module === '' || $id < 1) {
    ApiResponse::json(['success' => false, 'message' => 'Module and id are required.'], 422);
}

try {
    $updated = repo()->markAsRead($module, $id);
    ApiResponse::json(['success' => true, 'updated' => $updated, 'message' => $updated ? 'Marked as read.' : 'Record already updated.']);
} catch (InvalidArgumentException $exception) {
    ApiResponse::json(['success' => false, 'message' => $exception->getMessage()], 422);
} catch (Throwable $exception) {
    ApiResponse::json(['success' => false, 'message' => 'Unable to mark as read.', 'error' => $exception->getMessage()], 500);
}
