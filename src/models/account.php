<?php
require "src/Connector.php";
class Account
{
    protected function getDatabase()
    {
        $connector = new Connector;
        return $connector;
    }
    public function getData(): array
    {
        $pdo = $this->getDatabase()->getConnector();
        $sql = "SELECT * FROM member";
        $row = $pdo->query($sql);

        return $row->fetchALL(PDO::FETCH_ASSOC);
    }

    public function find(string $id): array|bool
    {
        $pdo = $this->getDatabase()->getConnector();
        $sql = "SELECT * 
                FROM member
                WHERE id = :id";
        $row = $pdo->prepare($sql);
        $row->bindValue(":id", $id, PDO::PARAM_INT);
        $row->execute();

        return $row->fetch(PDO::FETCH_ASSOC);
    }

    public function insert(array $data): bool
    {

        $pdo = $this->getDatabase()->getConnector();
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), "?"));

        $sql = "INSERT INTO member ($columns)
                VALUES ($placeholders)";

        $row = $pdo->prepare($sql);

        $i = 1;

        foreach ($data as $value) {
            $type = match (gettype($value)) {
                "boolean" => PDO::PARAM_BOOL,
                "integer" => PDO::PARAM_INT,
                "NULL" => PDO::PARAM_NULL,
                default => PDO::PARAM_STR
            };
            $row->bindValue($i++, $value, $type);
        }

        return $row->execute();
    }

   
}
