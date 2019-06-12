<?php 

namespace Tests\Facade;

use App\Facade\RegisterFacade;
use PHPUnit\Framework\TestCase;

class RegisterFacadeTest extends TestCase
{
    public function testRegisterUsedFacade()
    {
        $nome = 'Teste';
        $email = 'test@test.com';
        $telefone = '9999999999';
        
        $register = new RegisterFacade;
        $result = $register->registerAndSendMessage($nome, $email, $telefone);

        $this->assertInternalType('array', $result);
        $this->assertEquals(2, count($result));

        $this->assertEquals('Email send!', $result[0]);
        $this->assertEquals('Sms send!', $result[1]);
    }
}