<?php

namespace App\Facade;

use App\Adapter\Person;
use App\Adapter\Register;
use App\Adapter\MailAdapter;
use App\Adapter\SmsAdapter;

class RegisterFacade
{
    public function registerAndSendMessage($name, $email, $phone)
    {
        $person = new Person;
        $person->setName($name);
        $person->setEmail($email);
        $person->setPhone($phone);

        $register = new Register($person);
        $register->addProcess(new MailAdapter);
        $register->addProcess(new SmsAdapter);
        return $register->run();
    }
}