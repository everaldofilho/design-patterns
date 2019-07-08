<?php

namespace Tests\Memento;

use PHPUnit\Framework\TestCase;
use App\Momento\Card;

class CardTest extends TestCase
{
    public function testReturnStatus()
    {
        $card = new Card();
        $card->setStatus("created");
        $this->assertEquals("created", $card->getStatus());
        $card->setStatus("in progress");
        $this->assertEquals("in progress", $card->getStatus());
        $card->setStatus("done");
        $this->assertEquals("done", $card->getStatus());

        $card->restore();
        $this->assertEquals("in progress", $card->getStatus());
        $card->restore();
        $this->assertEquals("created", $card->getStatus());
        $card->restore();
        $this->assertEquals(null, $card->getStatus());
    }
}
