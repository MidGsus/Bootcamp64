<?php

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'arkus',
        'password' => 'nexus',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
