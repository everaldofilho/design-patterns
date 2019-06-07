<?php

namespace App\Singleton;
use \PDO;

class Conection
{
    /** @var PDO */
    private $connection = null;

    public static function getConnection() : PDO
    {
        if ($this->connection == null) {
            $this->connection = new PDO('"mysql:host=localhost;dbname=mysql", "root",');
        }
        
        return $this->connection;
    }
}