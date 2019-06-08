<?php

namespace Tests\FactoryMethod;

use PHPUnit\Framework\TestCase;
use App\FactoryMethod\SearchDynamic;

class SearchTest extends TestCase
{
    public function testSearchForMail()
    {
        $search = new SearchDynamic();
        $search->setType('email');
        $result = $search->search("email@email.com.br");

        $this->assertEquals('Pesquisando pelo Email "email@email.com.br"', $result);
    }

    public function testSearchForName()
    {
        $search = new SearchDynamic();
        $search->setType('name');

        $result = $search->search("Fulando de tal");

        $this->assertEquals('Pesquisando pelo Nome "Fulando de tal"', $result);
    }

    public function testSearchForIp()
    {
        $search = new SearchDynamic();
        $search->setType('ip');

        $result = $search->search("192.168.1.1");

        $this->assertEquals('Pesquisando pelo IP "192.168.1.1"', $result);
    }

    public function testSearchDynamicType()
    {
        $search = new SearchDynamic();

        $resultIp = $search->searchAll("192.168.1.1");
        $resultEmail = $search->searchAll("email@email.com.br");
        $resultNome = $search->searchAll("Fulando de tal");

        $this->assertEquals('Pesquisando pelo IP "192.168.1.1"', $resultIp);
        $this->assertEquals('Pesquisando pelo Email "email@email.com.br"', $resultEmail);
        $this->assertEquals('Pesquisando pelo Nome "Fulando de tal"', $resultNome);
    }
}