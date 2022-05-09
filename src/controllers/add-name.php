<?php

try {
    /* @var $app */
    $app['database']->insert('users', [
        'name' => $_POST['name']
    ]);
} catch (Exception $e) {
    die('Error during database insertion : ' . PHP_EOL . $e->getMessage());
}

header('Location: /');