<?php

namespace App;

use PDO;

class Connector
{
    private ?PDO $pdo = null;
    public function getConnector(): PDO
    {

        $dsn = "sqlite:member.db";
        if ($this->pdo === null) {
            $this->pdo = new PDO($dsn, null, null, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }

        return $this->pdo;
    }
}
