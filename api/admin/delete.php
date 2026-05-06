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
    $deleted = repo()->deleteByModule($module, $id);
    ApiResponse::json(['success' => true, 'deleted' => $deleted, 'message' => $deleted ? 'Record deleted.' : 'Record not found.']);
} catch (InvalidArgumentException $exception) {
    ApiResponse::json(['success' => false, 'message' => $exception->getMessage()], 422);
} catch (Throwable $exception) {
    ApiResponse::json(['success' => false, 'message' => 'Unable to delete record.', 'error' => $exception->getMessage()], 500);
}
