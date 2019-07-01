<?php

namespace App\Decorator;

interface UserI
{
    public function setLogin($login);
    public function setPassword($password);
    public function getLogin();
    public function getPassword();
}
