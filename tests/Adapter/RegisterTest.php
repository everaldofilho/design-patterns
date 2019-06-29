<?php

namespace Tests\Adapter;

use PHPUnit\Framework\TestCase;
use App\Adapter\Register;
use App\Adapter\Person;
use App\Adapter\MailAdapter;
use App\Adapter\SmsAdapter;

class RegisterTest extends TestCase
{
    public function testAdapter()
    {
        $person = new Person;
        $person->setName("Fulano");
        $person->setEmail("email@email.com");
        $person->setPhone("(11) 9 9999-999");

        $register = new Register($person);
        $register->addProcess(new MailAdapter);
        $register->addProcess(new SmsAdapter);
        $result = $register->run();
        
        $this->assertInternalType('array', $result);
        $this->assertEquals(2, count($result));
        $this->assertEquals("Mail send", $result[0]);
        $this->assertEquals("Sms send", $result[1]);
    }
}
