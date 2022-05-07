<?php

class QueryBuilder
{


    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table}");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, $intoClass);

    }
}