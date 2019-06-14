<?php

namespace Tests\Decorator;

use PHPUnit\Framework\TestCase;
use App\Decorator\User;
use App\Decorator\UserEncriptNormal;
use App\Decorator\UserEncriptBcript;

class UserTest extends TestCase
{
    public function testCreateUserNormal()
    {
        $user = new User();
        $user->setLogin("username");
        $user->setPassword("password");

        $this->assertEquals("username", $user->getLogin());
        $this->assertEquals("password", $user->getPassword());
    }

    public function testCreateUserPasswordHash()
    {
        $user = new User();
        $user->setLogin("username");
        $user->setPassword("password");

        $user = new UserEncriptNormal($user);

        $this->assertTrue(password_verify('password', $user->getPassword()));
    }

    public function testCreateUserPasswordBcript()
    {
        $user = new User();
        $user->setLogin("username");
        $user->setPassword("password");

        $user = new UserEncriptBcript($user);

        $this->assertTrue(password_verify('password', $user->getPassword()));
    }
}
