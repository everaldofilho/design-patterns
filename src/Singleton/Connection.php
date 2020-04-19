<?php

namespace App\Singleton;

use \PDO;

class Connection
{
    /** @var PDO */
    private static $connection = null;

    public static function getConnection() : PDO
    {
        if (self::$connection == null) {
            self::$connection = new PDO("mysql:host=127.0.0.1;dbname=patterns", "root", '');
        }
        
        return self::$connection;
    }
}
