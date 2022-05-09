<?php

class QueryBuilder
{


    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table}");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function insert(string $table, $data): void
    {
        //TODO Prepare data for insertion
        $stmt = $this->pdo->prepare("INSERT {$data} INTO {$table}");

        $stmt->execute();
    }
}