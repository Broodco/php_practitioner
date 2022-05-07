<?php

function dd($data): void {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function connectToDb(): PDO
{
    try {
        return new PDO(
            'mysql:host=mysql;dbname=php-playground',
            'playground-user',
            'playground-pass1234'
        );
    } catch (PDOException $e) {
        die('Could not connect to the database : ' . PHP_EOL . PHP_EOL . $e->getMessage());
    }
}

function fetchAllTasks($pdo): array {
    $stmt = $pdo->prepare('SELECT * FROM tasks');

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, Task::class);
}