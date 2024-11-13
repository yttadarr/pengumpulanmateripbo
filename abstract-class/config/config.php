<?php

return [
    'db_host' => 'localhost',
    'db_name' => 'example-demo-web-native',
    'db_user' => 'root',
    'db_pass' => '',
    'db_options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ],
];