<?php

namespace Tests\Adapter;

use PHPUnit\Framework\TestCase;
use App\Adapter\Person;

class PersonTest extends TestCase
{
    public function testRegister()
    {
        $register = new Person;
        $register->setName("Fulano");
        $register->setEmail("email@email.com");
        $register->setPhone("(99) 9 9999-999");
        
        $this->assertEquals("Fulano", $register->getName());
        $this->assertEquals("email@email.com", $register->getEmail());
        $this->assertEquals("(99) 9 9999-999", $register->getPhone());
    }
}