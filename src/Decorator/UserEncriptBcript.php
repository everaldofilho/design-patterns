<?php

namespace App\Decorator;

class UserEncriptBcript extends UserDecorator
{
    public function getPassword()
    {
        return password_hash(parent::getPassword(), PASSWORD_BCRYPT);
    }
}
