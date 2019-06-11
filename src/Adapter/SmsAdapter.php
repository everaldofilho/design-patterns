<?php

namespace App\Adapter;

class SmsAdapter implements Process
{
    private $sms;

    public function __construct()
    {
        $this->sms = new Sms;
    }

    public function run(Person $person): int
    {
        $this->sms->setPhone($person->getPhone());
        $this->sms->setMessage("You register success");
        $result = $this->sms->send();

        return $result ? 1 : 0;
    }

    public function getMessage(): string
    {
        return "Sms send";
    }
}