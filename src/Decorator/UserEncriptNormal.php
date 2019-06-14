<?php

namespace App\Decorator;

class UserEncriptNormal extends UserDecorator
{
    public function getPassword()
    {
        return password_hash($this->user->getPassword(), PASSWORD_DEFAULT);
    }
}