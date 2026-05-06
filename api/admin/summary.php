<?php
declare(strict_types=1);

require_once __DIR__ . '/../../appli/bootstrap.php';
auth()->requireLogin();

try {
    ApiResponse::json(['success' => true, 'summary' => repo()->getSummary()]);
} catch (Throwable $exception) {
    ApiResponse::json(['success' => false, 'message' => 'Unable to load summary.', 'error' => $exception->getMessage()], 500);
}
