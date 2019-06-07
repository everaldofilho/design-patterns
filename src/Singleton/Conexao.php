<?php

namespace App\Singleton;
use \PDO;

class Conection
{
    /** @var PDO */
    private static $connection = null;

    public static function getConnection() : PDO
    {
        if (self::$connection == null) {
            self::$connection = new PDO('"mysql:host=localhost;dbname=mysql", "root",');
        }

        return self::$connection;
    }
}