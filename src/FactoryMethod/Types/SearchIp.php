<?php

namespace App\FactoryMethod\Types;

class SearchIp implements Search
{
    public function search(string $search) : String
    {
        // Code with criterion of the search for ip
        return "Pesquisando pelo IP \"{$search}\"";
    }
}
