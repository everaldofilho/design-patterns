<?php

namespace App\Decorator;

class UserEncriptNormal extends UserDecorator
{
    public function getPassword()
    {
        return password_hash(parent::getPassword(), PASSWORD_DEFAULT);
    }
}
