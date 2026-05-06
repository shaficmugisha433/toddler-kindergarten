<?php
declare(strict_types=1);

require_once __DIR__ . '/app/Core/DatabaseConnection.php';

$dbConfig = require __DIR__ . '/config/database.php';
$db = DatabaseConnection::connect($dbConfig);

$db->exec(
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
$columnStmt = $db->query('SHOW COLUMNS FROM teachers');
while ($row = $columnStmt->fetch(PDO::FETCH_ASSOC)) {
    $columns[] = strtolower((string) ($row['Field'] ?? ''));
}
if (!in_array('class_name', $columns, true)) {
    $db->exec('ALTER TABLE teachers ADD COLUMN class_name VARCHAR(120) NULL AFTER role_title');
}
if (!in_array('activity_training', $columns, true)) {
    $db->exec('ALTER TABLE teachers ADD COLUMN activity_training VARCHAR(160) NULL AFTER class_name');
}

$teachers = [
    ['Aisha Nankya', 'Lead Teacher'], ['Brian Mugabi', 'Assistant Teacher'], ['Cynthia Namuli', 'Lead Teacher'], ['Daniel Ssembatya', 'Lead Teacher'],
    ['Esther Nabirye', 'Assistant Teacher'], ['Faith Katushabe', 'Lead Teacher'], ['Grace Nambooze', 'Lead Teacher'], ['Hannah Akello', 'Assistant Teacher'],
    ['Irene Nakanwagi', 'Lead Teacher'], ['Jane Nakato', 'Assistant Teacher'], ['Kevin Kaggwa', 'Lead Teacher'], ['Lilian Namusoke', 'Lead Teacher'],
    ['Martha Nanteza', 'Assistant Teacher'], ['Naomi Tumwesigye', 'Lead Teacher'], ['Olivia Nakanjako', 'Lead Teacher'], ['Patricia Namayanja', 'Assistant Teacher'],
    ['Queenie Nabisubi', 'Lead Teacher'], ['Rachel Nantege', 'Assistant Teacher'], ['Sandra Natukunda', 'Lead Teacher'], ['Tracy Nabunya', 'Lead Teacher'],
    ['Ursula Nabukalu', 'Assistant Teacher'], ['Vanessa Nakyobe', 'Lead Teacher'], ['Winnie Nakafeero', 'Lead Teacher'], ['Yvonne Nassali', 'Assistant Teacher'],
    ['Zahara Nansubuga', 'Lead Teacher'], ['Abel Nsubuga', 'Assistant Teacher'], ['Benjamin Kato', 'Lead Teacher'], ['Charles Ssekimpi', 'Lead Teacher'],
    ['Diana Nakiranda', 'Assistant Teacher'], ['Edith Nakalema', 'Lead Teacher'], ['Florence Kyomuhendo', 'Lead Teacher'], ['Gerald Ssalongo', 'Assistant Teacher'],
    ['Harriet Nansamba', 'Lead Teacher'], ['Isaac Tumukunde', 'Lead Teacher'], ['Joan Najjemba', 'Assistant Teacher'], ['Kellen Namata', 'Lead Teacher'],
    ['Leonard Mwesigwa', 'Assistant Teacher'], ['Mercy Namirembe', 'Lead Teacher'], ['Norah Nansikombi', 'Lead Teacher'], ['Peter Kigozi', 'Assistant Teacher'],
];

$classes = [
    'Toddlers A (1-2 yrs)',
    'Toddlers B (1-2 yrs)',
    'Preschool A (2-4 yrs)',
    'Preschool B (2-4 yrs)',
    'Kindergarten A (4-6 yrs)',
    'Kindergarten B (4-6 yrs)',
];

$activities = [
    'Music and Rhythm',
    'Creative Art and Craft',
    'Phonics and Early Reading',
    'Outdoor Play and Sports',
    'Dance and Movement',
    'Numeracy and Counting Games',
    'Storytelling and Public Speaking',
    'STEM Discovery Lab',
];

$db->beginTransaction();
try {
    $db->exec('DELETE FROM teachers');

    $insert = $db->prepare(
        'INSERT INTO teachers (
            full_name, role_title, class_name, activity_training, parent_name, parent_phone,
            phone, email, hire_date, status, bio, created_at
        ) VALUES (
            :full_name, :role_title, :class_name, :activity_training, :parent_name, :parent_phone,
            :phone, :email, :hire_date, :status, :bio, NOW()
        )'
    );

    foreach ($teachers as $index => [$name, $role]) {
        $class = $classes[$index % count($classes)];
        $activity = $activities[$index % count($activities)];
        $teacherPhone = '+25677' . str_pad((string) (410000 + $index), 6, '0', STR_PAD_LEFT);
        $guardianPhone = '+25675' . str_pad((string) (310000 + $index), 6, '0', STR_PAD_LEFT);
        $emailSlug = strtolower(str_replace(' ', '.', $name));
        $hireDate = date('Y-m-d', strtotime('-' . (350 + ($index * 23)) . ' days'));

        $insert->execute([
            'full_name' => $name,
            'role_title' => $role,
            'class_name' => $class,
            'activity_training' => $activity,
            'parent_name' => 'Emergency Guardian ' . ($index + 1),
            'parent_phone' => $guardianPhone,
            'phone' => $teacherPhone,
            'email' => $emailSlug . '@toddlertown.edu',
            'hire_date' => $hireDate,
            'status' => 'active',
            'bio' => $name . ' supports ' . $class . ' and leads ' . $activity . '.',
        ]);
    }

    $db->commit();
    echo "Seeded 40 teachers successfully.\n";
} catch (Throwable $exception) {
    $db->rollBack();
    echo 'Seeding failed: ' . $exception->getMessage() . "\n";
    exit(1);
}
