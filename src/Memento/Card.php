<?php

namespace App\Momento;

use App\Memento\Memento;

class Card
{
    use Memento;

    private $status;

    public function setStatus($status)
    {
        $this->setHistory($status);
        $this->status = $status;
    }

    public function getStatus()
    {
        $this->status = $this->getCurrent();
        return $this->status;
    }
}
