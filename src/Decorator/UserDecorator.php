<?php

namespace App\Decorator;

abstract class UserDecorator implements UserI
{
    protected $user;

    public function __construct(UserI $user)
    {
        $this->user = $user;    
    }

    public function setLogin($login)
    {
        $this->user->setLogin($login);
    }

    public function setPassword($password)
    {
        $this->user->setPassword($password);
    }
    
    public function getPassword()
    {
        return $this->user->getPassword();
    }

    public function getLogin()
    {
        return $this->user->getLogin();
    }

}