<?php
require __DIR__ . '/appli/bootstrap.php';
$cols = db()->query('SHOW COLUMNS FROM admin_users')->fetchAll();
echo "COLUMNS\n";
foreach ($cols as $c) {
    echo $c['Field'] . "\n";
}
$rows = db()->query('SELECT id, username, display_name, created_at FROM admin_users ORDER BY id ASC')->fetchAll();
echo "ROWS\n";
foreach ($rows as $r) {
    echo json_encode($r, JSON_UNESCAPED_SLASHES) . "\n";
}
