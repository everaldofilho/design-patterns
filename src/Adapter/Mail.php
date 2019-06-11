<?php

namespace App\Adapter;

class Mail
{
    protected $message;
    protected $subject;
    protected $email;

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
        // You code Here
        return true;
    }
}