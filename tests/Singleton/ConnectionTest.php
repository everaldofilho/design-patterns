<?php

namespace Tests\Singleton;

use App\Singleton\Connection;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    public function testNewInstancePdo()
    {
        $connection = Connection::getConnection();
        $connection2 = Connection::getConnection();

        $this->assertInstanceOf('\PDO', $connection, "Teste retorno um PDO");
        $this->assertEquals($connection, $connection2, "Test se retorno a mesma instancia");
    }

    public function testSingletonConneciton()
    {
        $conection = Connection::getConnection();
        
        $this->assertInstanceOf('\PDO', $conection);
    }
}