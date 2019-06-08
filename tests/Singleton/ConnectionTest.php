<?php

namespace Tests\Singleton;

use App\Singleton\Connection;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    public function testNewInstancePdo()
    {
        $connection = Connection::getConnection();
        $connectionNova = Connection::getConnection();

        $this->assertInstanceOf('\PDO', $connection, "Teste retorno um PDO");
        $this->assertEquals($connection, $connectionNova, "As Instancias são exatamente as mesmas");
    }
}
