<?php

namespace App\Decorator;

class UserEncriptBcript extends UserDecorator
{
    public function getPassword()
    {
        return password_hash($this->user->getPassword(), PASSWORD_BCRYPT);
    }
}