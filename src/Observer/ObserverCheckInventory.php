<?php

namespace App\Observer;

class ObserverCheckInventory implements ObserverI
{
    public function onEventSave(Card $card)
    {
        $card->addLog("Validando estoque");

        foreach ($card->getAllProduct() as $product) {
            $status = $product->getQuantity() >= 1 ? 'ok' : 'vazio';
            $card->addLog(sprintf("Estoque %s %s", $product->getName(), $status));
        }
    }
}
