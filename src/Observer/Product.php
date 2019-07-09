<?php

namespace App\Observer;

class Product
{
    protected $name;
    protected $quantity;
    protected $amount;

    public function __construct($name, $quantity, $amount)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->amount = $amount;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
}
