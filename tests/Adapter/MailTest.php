<?php

namespace Tests\Adapter;

use PHPUnit\Framework\TestCase;
use App\Adapter\Mail;

class MailTest extends TestCase
{
    public function testSend()
    {
        $mail = new Mail;
        $mail->setEmail("email@email.com");
        $mail->setSubject("The subject here");
        $mail->setMessage("Hello Word");
        
        $return = $mail->send();
        $this->assertTrue($return);
    }
}