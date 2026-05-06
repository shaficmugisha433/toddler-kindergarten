<?php
declare(strict_types=1);

require_once __DIR__ . '/../../appli/bootstrap.php';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    ApiResponse::json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

auth()->logout();
ApiResponse::json(['success' => true, 'message' => 'Logged out successfully.']);
