<?php

namespace App\Adapter;

class Sms
{
    protected $message;
    protected $phone;

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function send()
    {
        $msg = sprintf("Phone: %s, Message: %s", $this->getPhone(), $this->getMessage());
        if ($msg) {
            return true;
        }
        return false;
    }
}
