<?php
require __DIR__ . '/app/Core/DatabaseConnection.php';
$cfg = require __DIR__ . '/config/database.php';
$db = DatabaseConnection::connect($cfg);
$count = (int) $db->query('SELECT COUNT(*) FROM teachers')->fetchColumn();
echo "teachers={$count}\n";
$row = $db->query('SELECT full_name, class_name, activity_training, phone, parent_phone FROM teachers ORDER BY id ASC LIMIT 1')->fetch(PDO::FETCH_ASSOC);
echo json_encode($row, JSON_UNESCAPED_SLASHES) . "\n";
