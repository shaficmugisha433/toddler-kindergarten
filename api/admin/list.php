<?php
declare(strict_types=1);

require_once __DIR__ . '/../../appli/bootstrap.php';
auth()->requireLogin();

$module = clean_string($_GET['module'] ?? '');
$limit = (int) ($_GET['limit'] ?? 200);

if ($module === '') {
    ApiResponse::json(['success' => false, 'message' => 'Module is required.'], 422);
}

try {
    $rows = repo()->fetchModule($module, $limit);
    ApiResponse::json(['success' => true, 'module' => $module, 'rows' => $rows]);
} catch (InvalidArgumentException $exception) {
    ApiResponse::json(['success' => false, 'message' => $exception->getMessage()], 422);
} catch (Throwable $exception) {
    ApiResponse::json(['success' => false, 'message' => 'Unable to fetch records.', 'error' => $exception->getMessage()], 500);
}
