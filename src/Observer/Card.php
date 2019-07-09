<?php

namespace App\Observer;

class Card extends CardObserver
{
    const STATUS_IN_PROGRESS = 1;
    const STATUS_FINISH = 2;

    protected $id;
    protected $products = [];
    protected $status;
    protected $logs = [];

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function getAllProduct(): array
    {
        return $this->products;
    }

    public function addLog($log)
    {
        $this->logs[] = $log;
    }

    public function getLog(): array
    {
        return $this->logs;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus(): Int
    {
        return $this->status;
    }

    public function save()
    {
        $this->onSave();
    }
}
