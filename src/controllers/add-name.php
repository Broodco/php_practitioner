<?php

try {
    /* @var $app */
    $app['database']->insert('names', $_POST['name']);
} catch (Exception $e) {
    die('Error during database insertion : ' . PHP_EOL . $e->getMessage());
}

http_redirect('/');