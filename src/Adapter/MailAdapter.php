<?php

namespace App\Adapter;

class MailAdapter implements Process
{
    private $mail;

    public function __construct()
    {
        $this->mail = new Mail;
    }

    public function run(Person $person): int
    {
        $this->mail->setEmail($person->getEmail());
        $this->mail->setSubject("Register sucess");
        $this->mail->setMessage("You register success");
        $result = $this->mail->send();

        return $result ? 1 : 0;
    }
    

    public function getMessage(): string
    {
        return "Mail send";
    }
}