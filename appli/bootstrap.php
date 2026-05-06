<?php
declare(strict_types=1);

require_once __DIR__ . '/Core/DatabaseConnection.php';
require_once __DIR__ . '/Core/ApiResponse.php';
require_once __DIR__ . '/Core/AdminAuth.php';
require_once __DIR__ . '/Repositories/SubmissionRepository.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function app_config(): array
{
    static $config = null;
    if ($config === null) {
        $config = require __DIR__ . '/../config/app.php';
    }
    return $config;
}

function database_config(): array
{
    static $config = null;
    if ($config === null) {
        $config = require __DIR__ . '/../config/database.php';
    }
    return $config;
}

function db(): PDO
{
    static $pdo = null;
    if ($pdo === null) {
        $pdo = DatabaseConnection::connect(database_config());
    }
    return $pdo;
}

function repo(): SubmissionRepository
{
    static $repo = null;
    if ($repo === null) {
        $repo = new SubmissionRepository(db());
    }
    return $repo;
}

function auth(): AdminAuth
{
    static $auth = null;
    if ($auth === null) {
        $auth = new AdminAuth(db(), app_config());
    }
    return $auth;
}

function request_data(): array
{
    $contentType = $_SERVER['CONTENT_TYPE'] ?? '';
    if (stripos($contentType, 'application/json') !== false) {
        $decoded = json_decode(file_get_contents('php://input') ?: '', true);
        return is_array($decoded) ? $decoded : [];
    }

    return $_POST;
}

function clean_string($value): string
{
    return trim((string) $value);
}

function to_bool_flag($value): int
{
    $val = strtolower(trim((string) $value));
    return in_array($val, ['1', 'true', 'yes', 'on'], true) ? 1 : 0;
}

date_default_timezone_set(app_config()['timezone'] ?? 'UTC');
