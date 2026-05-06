<?php
declare(strict_types=1);

require_once __DIR__ . '/../../appli/bootstrap.php';

$user = auth()->user();
if (!$user) {
    ApiResponse::json(['success' => true, 'authenticated' => false]);
}

ApiResponse::json(['success' => true, 'authenticated' => true, 'user' => $user]);
