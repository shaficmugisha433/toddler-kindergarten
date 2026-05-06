<?php
declare(strict_types=1);

final class SubmissionRepository
{
    public function __construct(private PDO $db)
    {
        $this->ensurePeopleTables();
    }

    public function createContact(array $data): int
    {
        $stmt = $this->db->prepare('INSERT INTO contacts (full_name, email, phone, subject, message, is_read, created_at) VALUES (:full_name, :email, :phone, :subject, :message, 0, NOW())');
        $stmt->execute($data);
        return (int) $this->db->lastInsertId();
    }

    public function createAdmission(array $data): int
    {
        $stmt = $this->db->prepare('INSERT INTO admissions (
                child_first_name, child_last_name, child_dob, child_gender, program_interest,
                parent_first_name, parent_last_name, parent_email, parent_phone, parent_address,
                relationship_to_child, preferred_contact_method, siblings, sibling_names, how_heard,
                additional_notes, terms_agree, newsletter, documents_json, status, is_read, created_at
            ) VALUES (
                :child_first_name, :child_last_name, :child_dob, :child_gender, :program_interest,
                :parent_first_name, :parent_last_name, :parent_email, :parent_phone, :parent_address,
                :relationship_to_child, :preferred_contact_method, :siblings, :sibling_names, :how_heard,
                :additional_notes, :terms_agree, :newsletter, :documents_json, :status, 0, NOW()
            )');
        $stmt->execute($data);
        return (int) $this->db->lastInsertId();
    }

    public function createEnrollment(array $data): int
    {
        $stmt = $this->db->prepare('INSERT INTO enrollments (student_name, date_of_birth, class_name, enrollment_date, parent_name, parent_email, parent_phone, notes, status, created_at) VALUES (:student_name, :date_of_birth, :class_name, :enrollment_date, :parent_name, :parent_email, :parent_phone, :notes, :status, NOW())');
        $stmt->execute($data);
        return (int) $this->db->lastInsertId();
    }

    public function createPayment(array $data): int
    {
        $stmt = $this->db->prepare('INSERT INTO payments (student_name, amount, payment_date, term_label, payment_method, notes, created_at) VALUES (:student_name, :amount, :payment_date, :term_label, :payment_method, :notes, NOW())');
        $stmt->execute($data);
        return (int) $this->db->lastInsertId();
    }

    public function getSummary(): array
    {
        $admissions = $this->count('admissions');
        $contacts = $this->count('contacts');
        $enrollments = $this->count('enrollments');
        $payments = $this->count('payments');
        $unreadContacts = (int) ($this->db->query('SELECT COUNT(*) total FROM contacts WHERE is_read = 0')->fetch()['total'] ?? 0);
        $unreadAdmissions = (int) ($this->db->query('SELECT COUNT(*) total FROM admissions WHERE is_read = 0')->fetch()['total'] ?? 0);
        $fees = (float) ($this->db->query('SELECT COALESCE(SUM(amount),0) total FROM payments')->fetch()['total'] ?? 0);

        return [
            'admissions' => $admissions,
            'contacts' => $contacts,
            'enrollments' => $enrollments,
            'payments' => $payments,
            'unread' => $unreadContacts + $unreadAdmissions,
            'total_fees' => $fees,
        ];
    }

    public function fetchModule(string $module, int $limit = 200): array
    {
        $queries = [
            'admissions' => 'SELECT * FROM admissions ORDER BY created_at DESC LIMIT :limit',
            'contacts' => 'SELECT * FROM contacts ORDER BY created_at DESC LIMIT :limit',
            'students' => 'SELECT
                id,
                student_name AS full_name,
                date_of_birth,
                class_name,
                enrollment_date AS admission_date,
                parent_name,
                parent_email,
                parent_phone,
                status,
                notes,
                created_at
            FROM enrollments
            ORDER BY created_at DESC LIMIT :limit',
            'teachers' => 'SELECT
                id,
                full_name,
                role_title,
                class_name,
                activity_training,
                parent_name,
                parent_phone,
                phone,
                email,
                hire_date,
                status,
                bio,
                created_at
            FROM teachers
            ORDER BY created_at DESC LIMIT :limit',
            'enrollments' => 'SELECT * FROM enrollments ORDER BY created_at DESC LIMIT :limit',
            'payments' => 'SELECT * FROM payments ORDER BY created_at DESC LIMIT :limit',
        ];

        if (!isset($queries[$module])) {
            throw new InvalidArgumentException('Invalid module requested.');
        }

        $stmt = $this->db->prepare($queries[$module]);
        $stmt->bindValue(':limit', max(1, min($limit, 500)), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function markAsRead(string $module, int $id): bool
    {
        $tables = ['admissions' => 'admissions', 'contacts' => 'contacts'];
        if (!isset($tables[$module])) {
            throw new InvalidArgumentException('Mark read is not supported for this module.');
        }

        $stmt = $this->db->prepare("UPDATE {$tables[$module]} SET is_read = 1 WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount() > 0;
    }

    public function deleteByModule(string $module, int $id): bool
    {
        $tables = [
            'admissions' => 'admissions',
            'contacts' => 'contacts',
            'students' => 'enrollments',
            'teachers' => 'teachers',
            'enrollments' => 'enrollments',
            'payments' => 'payments',
        ];

        if (!isset($tables[$module])) {
            throw new InvalidArgumentException('Invalid module for delete operation.');
        }

        $stmt = $this->db->prepare("DELETE FROM {$tables[$module]} WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount() > 0;
    }

    private function count(string $table): int
    {
        return (int) ($this->db->query("SELECT COUNT(*) AS total FROM {$table}")->fetch()['total'] ?? 0);
    }

    private function ensurePeopleTables(): void
    {
        $this->db->exec(
            'CREATE TABLE IF NOT EXISTS teachers (
                id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                full_name VARCHAR(150) NOT NULL,
                role_title VARCHAR(120) NOT NULL,
                class_name VARCHAR(120) NULL,
                activity_training VARCHAR(160) NULL,
                parent_name VARCHAR(150) NULL,
                parent_phone VARCHAR(60) NULL,
                phone VARCHAR(60) NULL,
                email VARCHAR(190) NULL,
                hire_date DATE NULL,
                status VARCHAR(30) NOT NULL DEFAULT "active",
                bio TEXT NULL,
                created_at DATETIME NOT NULL,
                INDEX idx_teachers_created_at (created_at)
            )'
        );

        $columns = [];
        $stmt = $this->db->query('SHOW COLUMNS FROM teachers');
        while ($row = $stmt->fetch()) {
            $columns[] = strtolower((string) ($row['Field'] ?? ''));
        }

        if (!in_array('class_name', $columns, true)) {
            $this->db->exec('ALTER TABLE teachers ADD COLUMN class_name VARCHAR(120) NULL AFTER role_title');
        }
        if (!in_array('activity_training', $columns, true)) {
            $this->db->exec('ALTER TABLE teachers ADD COLUMN activity_training VARCHAR(160) NULL AFTER class_name');
        }
    }
}
