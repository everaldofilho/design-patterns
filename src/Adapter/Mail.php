<?php

namespace App\Adapter;

class Mail
{
    protected $email;
    protected $subject;
    protected $message;

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function send()
    {
        $email = sprintf("Email: %s, Message: %s", $this->getEmail(), $this->getMessage());
        if ($email) {
            return true;
        }
        return false;
    }
}
