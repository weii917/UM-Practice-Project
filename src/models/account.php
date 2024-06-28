<?php

class Account
{
    public function getData(): array
    {
        $dsn = "sqlite:member.db";

        $pdo = new PDO($dsn, null, null, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $row = $pdo->query("SELECT * FROM member");

        return $row->fetchALL(PDO::FETCH_ASSOC);
    }
}
