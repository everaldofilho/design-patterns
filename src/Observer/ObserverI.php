<?php

namespace App\Observer;

interface ObserverI
{
    public function onEventSave(Card $card);
}
