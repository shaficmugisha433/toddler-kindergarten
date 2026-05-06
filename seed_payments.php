<?php
require_once __DIR__ . '/app/bootstrap.php';

try {
    $db = db();
    
    // Get all students
    $students = $db->query('SELECT student_name FROM enrollments LIMIT 20')->fetchAll(PDO::FETCH_COLUMN);
    
    if (empty($students)) {
        echo "No students found. Please seed students first.\n";
        exit;
    }

    $methods = ['Cash', 'Bank Transfer', 'Mobile Money'];
    $terms = ['Term 1 2024', 'Term 2 2024', 'Term 3 2023'];
    
    $stmt = $db->prepare('INSERT INTO payments (student_name, amount, payment_date, term_label, payment_method, notes, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())');

    $count = 0;
    foreach ($students as $student) {
        $amount = (float) rand(500000, 1500000);
        $date = date('Y-m-d', strtotime('-' . rand(0, 60) . ' days'));
        $method = $methods[array_rand($methods)];
        $term = $terms[array_rand($terms)];
        $notes = "Partial payment for " . $term;
        
        $stmt->execute([$student, $amount, $date, $term, $method, $notes]);
        $count++;
    }

    echo "Successfully seeded $count payment records.\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
