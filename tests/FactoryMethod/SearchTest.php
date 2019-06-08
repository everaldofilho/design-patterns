<?php

namespace Tests\FactoryMethod;

use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    public function testSearchForMail()
    {
        $search = new Search('email');
        $result = $search->search("email@email.com.br");

        $this->assertEquals('Pequisando o email "email@email.com.br"', $result);
    }

    public function testSearchForName()
    {
        $search = new Search('name');
        $result = $search->search("Fulando de tal");

        $this->assertEquals('Pesquisando pelo nome "fulano de tal"', $result);
    }

    public function testSearchForIp()
    {
        $search = new Search('ip');
        $result = $search->search("192.168.1.1");

        $this->assertEquals('Pesquisando pelo IP "fulano de tal"', $result);
    }
}