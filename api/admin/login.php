<?php
declare(strict_types=1);

require_once __DIR__ . '/../../appli/bootstrap.php';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
    ApiResponse::json(['success' => false, 'message' => 'Method not allowed.'], 405);
}

try {
    $data = request_data();
    $username = clean_string($data['username'] ?? '');
    $password = (string) ($data['password'] ?? '');

    $user = auth()->login($username, $password);
    if (!$user) {
        ApiResponse::json(['success' => false, 'message' => 'Invalid username or password.'], 401);
    }

    ApiResponse::json(['success' => true, 'message' => 'Login successful.', 'user' => $user]);
} catch (Throwable $exception) {
    ApiResponse::json(['success' => false, 'message' => 'Unable to complete login.', 'error' => $exception->getMessage()], 500);
}
