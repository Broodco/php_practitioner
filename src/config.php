<?php

return [
    'database' => [
        'name' => 'php-playground',
        'user' => 'playground-user',
        'pass' => 'playground-pass1234',
        'connection' => 'mysql:host=mysql',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ]
];