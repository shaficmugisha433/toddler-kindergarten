<?php
declare(strict_types=1);

return [
    'timezone' => getenv('APP_TIMEZONE') ?: 'Africa/Kampala',
    'default_admin_name' => getenv('ADMIN_NAME') ?: 'Administrator',
];
