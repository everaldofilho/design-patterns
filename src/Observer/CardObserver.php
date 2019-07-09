<?php

namespace App\Observer;

abstract class CardObserver
{
    protected $observers = [];
    protected $logs = [];

    public function addObserver(ObserverI $observer)
    {
        $this->observers[] = $observer;
    }

    public function getAllObservers() : Array
    {
        return $this->observers;
    }

    public function onSave()
    {
        foreach ($this->observers as $observer) {
            $observer->onEventSave($this);
        }
    }
}
