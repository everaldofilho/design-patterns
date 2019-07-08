<?php

namespace App\Memento;

trait Memento
{
    private $history = [];

    public function setHistory($current)
    {
        array_push($this->history, $current);
    }

    public function getCurrent()
    {
        return end($this->history);
    }

    public function restore()
    {
        array_pop($this->history);
    }
}
