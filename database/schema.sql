CREATE TABLE IF NOT EXISTS admin_users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    display_name VARCHAR(120) NOT NULL DEFAULT 'Administrator',
    last_login_at DATETIME NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS contacts (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(150) NOT NULL,
    email VARCHAR(190) NOT NULL,
    phone VARCHAR(60) NULL,
    subject VARCHAR(120) NOT NULL,
    message TEXT NOT NULL,
    is_read TINYINT(1) NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL,
    INDEX idx_contacts_created_at (created_at),
    INDEX idx_contacts_is_read (is_read)
);

CREATE TABLE IF NOT EXISTS admissions (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    child_first_name VARCHAR(120) NOT NULL,
    child_last_name VARCHAR(120) NOT NULL,
    child_dob DATE NOT NULL,
    child_gender VARCHAR(20) NOT NULL,
    program_interest VARCHAR(60) NOT NULL,
    parent_first_name VARCHAR(120) NOT NULL,
    parent_last_name VARCHAR(120) NOT NULL,
    parent_email VARCHAR(190) NOT NULL,
    parent_phone VARCHAR(60) NOT NULL,
    parent_address VARCHAR(255) NOT NULL,
    relationship_to_child VARCHAR(60) NOT NULL,
    preferred_contact_method VARCHAR(30) NOT NULL,
    siblings VARCHAR(20) NULL,
    sibling_names VARCHAR(255) NULL,
    how_heard VARCHAR(100) NULL,
    additional_notes TEXT NULL,
    terms_agree TINYINT(1) NOT NULL DEFAULT 0,
    newsletter TINYINT(1) NOT NULL DEFAULT 0,
    documents_json LONGTEXT NULL,
    status VARCHAR(30) NOT NULL DEFAULT 'new',
    is_read TINYINT(1) NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL,
    INDEX idx_admissions_created_at (created_at),
    INDEX idx_admissions_is_read (is_read)
);

CREATE TABLE IF NOT EXISTS enrollments (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(150) NOT NULL,
    date_of_birth DATE NOT NULL,
    class_name VARCHAR(100) NOT NULL,
    enrollment_date DATE NOT NULL,
    parent_name VARCHAR(150) NOT NULL,
    parent_email VARCHAR(190) NOT NULL,
    parent_phone VARCHAR(60) NULL,
    notes TEXT NULL,
    status VARCHAR(30) NOT NULL DEFAULT 'active',
    created_at DATETIME NOT NULL,
    INDEX idx_enrollments_created_at (created_at)
);

CREATE TABLE IF NOT EXISTS payments (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(150) NOT NULL,
    amount DECIMAL(12,2) NOT NULL DEFAULT 0,
    payment_date DATE NOT NULL,
    term_label VARCHAR(60) NOT NULL,
    payment_method VARCHAR(60) NOT NULL,
    notes TEXT NULL,
    created_at DATETIME NOT NULL,
    INDEX idx_payments_created_at (created_at)
);

CREATE TABLE IF NOT EXISTS teachers (
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
    status VARCHAR(30) NOT NULL DEFAULT 'active',
    bio TEXT NULL,
    created_at DATETIME NOT NULL,
    INDEX idx_teachers_created_at (created_at)
);