<?php

namespace Tests\Adapter;

use PHPUnit\Framework\TestCase;
use App\Adapter\Sms;

class SmsTest extends TestCase
{
    public function testSend()
    {
        $sms = new Sms;
        $sms->setPhone("(99) 9 9999-9999");
        $sms->setMessage("Hello Word");
        $return = $sms->send();
        $this->assertTrue($return);
    }
}
