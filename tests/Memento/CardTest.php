<?php

namespace Tests\Memento;

use PHPUnit\Framework\TestCase;
use App\Momento\Card;

class CardTest extends TestCase
{
    public function testReturnStatus()
    {
        $card = new Card();
        $card->setStatus("Criado");
        $this->assertEquals("Criado", $card->getStatus());
        $card->setStatus("Em Andamento");
        $this->assertEquals("Em Andamento", $card->getStatus());
        $card->setStatus("Finalizado");
        $this->assertEquals("Finalizado", $card->getStatus());

        $card->restore();
        $this->assertEquals("Em Andamento", $card->getStatus());
        $card->restore();
        $this->assertEquals("Criado", $card->getStatus());
        $card->restore();
        $this->assertEquals(null, $card->getStatus());
    }
}
