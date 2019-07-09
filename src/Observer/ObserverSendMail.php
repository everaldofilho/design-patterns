<?php

namespace App\Observer;

class ObserverSendMail implements ObserverI
{
    public function onEventSave(Card $card)
    {
        if ($card->getStatus() == Card::STATUS_FINISH) {
            $card->addLog("Email enviado");
        }
    }
}
