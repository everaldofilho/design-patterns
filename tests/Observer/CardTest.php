<?php

namespace Tests\Observer;

use PHPUnit\Framework\TestCase;

// class Auxilium
use App\Observer\Card;
use App\Observer\Product;
use App\Observer\ObserverCheckInventory;
use App\Observer\ObserverSendMail;

class CardTest extends TestCase
{
    private $card;

    public function setUp()
    {
        $this->card = new Card("ped001");

        // Add Product
        $this->card->addProduct(new Product("Camisa", 1, 2.2));
        $this->card->addProduct(new Product("Blusa", 2, 3.2));

        // Add Observers Check inventory
        $this->card->addObserver(new ObserverCheckInventory);
        $this->card->addObserver(new ObserverSendMail);
    }

    public function testObserverInProgress()
    {
        $this->card->setStatus(Card::STATUS_IN_PROGRESS);
        $this->card->save();

        $logs = $this->card->getLog();

        $this->assertCount(2, $this->card->getAllObservers());
        $this->assertCount(3, $logs);

        $this->assertEquals('Validando estoque', $logs[0]);
        $this->assertEquals('Estoque Camisa ok', $logs[1]);
        $this->assertEquals('Estoque Blusa ok', $logs[2]);
    }

    public function testObserverFinish()
    {
        $this->card->setStatus(Card::STATUS_FINISH);
        $this->card->save();

        $logs = $this->card->getLog();

        $this->assertCount(4, $logs);

        $this->assertEquals('Validando estoque', $logs[0]);
        $this->assertEquals('Estoque Camisa ok', $logs[1]);
        $this->assertEquals('Estoque Blusa ok', $logs[2]);
        $this->assertEquals('Email enviado', $logs[3]);
    }
}
