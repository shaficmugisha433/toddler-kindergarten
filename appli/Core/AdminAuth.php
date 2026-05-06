<?php
declare(strict_types=1);

final class AdminAuth
{
    private PDO $db;
    private array $appConfig;
    private ?array $adminUserColumns = null;

    public function __construct(PDO $db, array $appConfig)
    {
        $this->db = $db;
        $this->appConfig = $appConfig;
    }

    public function login(string $username, string $password): ?array
    {
        $this->ensureAuthSchema();
        $this->ensureDefaultAdmin();

        $stmt = $this->db->prepare('SELECT id, display_name, password FROM admin_users WHERE username = :username LIMIT 1');
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if (!$user || empty($user['password']) || !password_verify($password, $user['password'])) {
            return null;
        }

        if ($this->hasAdminUserColumn('last_login_at')) {
            $this->db->prepare('UPDATE admin_users SET last_login_at = NOW() WHERE id = :id')->execute(['id' => $user['id']]);
        }

        session_regenerate_id(true);
        $_SESSION['admin_user'] = [
            'id' => (int) $user['id'],
            'display_name' => $this->resolveDisplayName($user['display_name'] ?? null),
        ];

        return $_SESSION['admin_user'];
    }

    public function logout(): void
    {
        unset($_SESSION['admin_user']);
        session_regenerate_id(true);
    }

    public function user(): ?array
    {
        return $_SESSION['admin_user'] ?? null;
    }

    public function requireLogin(): array
    {
        $user = $this->user();
        if (!$user) {
            ApiResponse::json(['success' => false, 'message' => 'Unauthorized access.'], 401);
        }

        return $user;
    }

    private function ensureDefaultAdmin(): void
    {
        $stmt = $this->db->prepare('SELECT id, password FROM admin_users WHERE username = :username LIMIT 1');
        $stmt->execute(['username' => 'shafic']);
        $existing = $stmt->fetch();

        $hashedPassword = password_hash('1234', PASSWORD_BCRYPT);

        if ($existing) {
            if (empty($existing['password'])) {
                $this->db->prepare('UPDATE admin_users SET password = :password WHERE id = :id')
                    ->execute([
                        'password' => $hashedPassword,
                        'id' => (int) $existing['id'],
                    ]);
            }
            return;
        }

        $count = (int) $this->db->query('SELECT COUNT(*) FROM admin_users')->fetchColumn();
        if ($count > 0) {
            $row = $this->db->query('SELECT id FROM admin_users ORDER BY id ASC LIMIT 1')->fetch();
            if ($row) {
                $this->db->prepare('UPDATE admin_users SET username = :username, password = :password WHERE id = :id')
                    ->execute([
                        'username' => 'shafic',
                        'password' => $hashedPassword,
                        'id' => (int) $row['id'],
                    ]);
            }
            return;
        }

        if ($this->hasAdminUserColumn('created_at')) {
            $this->db->prepare('INSERT INTO admin_users (username, password, display_name, created_at) VALUES (:username, :password, :display_name, NOW())')
                ->execute([
                    'username' => 'shafic',
                    'password' => $hashedPassword,
                    'display_name' => 'Admin',
                ]);
            return;
        }

        $this->db->prepare('INSERT INTO admin_users (username, password, display_name) VALUES (:username, :password, :display_name)')
            ->execute([
                'username' => 'shafic',
                'password' => $hashedPassword,
                'display_name' => 'Admin',
            ]);
    }

    private function ensureAuthSchema(): void
    {
        $columns = $this->getAdminUserColumns();
        $needsRefresh = false;

        if (!in_array('username', $columns, true)) {
            $this->db->exec('ALTER TABLE admin_users ADD COLUMN username VARCHAR(120) NULL');
            $needsRefresh = true;
        }

        if (!in_array('password', $columns, true)) {
            $this->db->exec('ALTER TABLE admin_users ADD COLUMN password VARCHAR(255) NULL');
            $needsRefresh = true;
        }

        if ($needsRefresh) {
            $this->adminUserColumns = null;
            $this->getAdminUserColumns();
        }
    }

    private function resolveDisplayName($displayName): string
    {
        $name = trim((string) ($displayName ?? ''));
        if ($name !== '') {
            return $name;
        }

        return (string) ($this->appConfig['default_admin_name'] ?? 'Administrator');
    }

    private function hasAdminUserColumn(string $column): bool
    {
        return in_array(strtolower($column), $this->getAdminUserColumns(), true);
    }

    private function getAdminUserColumns(): array
    {
        if ($this->adminUserColumns !== null) {
            return $this->adminUserColumns;
        }

        $stmt = $this->db->query('SHOW COLUMNS FROM admin_users');
        $columns = [];

        while ($row = $stmt->fetch()) {
            $columns[] = strtolower((string) ($row['Field'] ?? ''));
        }

        $this->adminUserColumns = $columns;
        return $columns;
    }
}
