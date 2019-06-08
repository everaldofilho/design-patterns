<?php

namespace App\FactoryMethod\Types;

class SearchName implements Search
{
    public function search(string $search) : String
    {
        // Code with criterion of the search for nome
        return "Pesquisando pelo Nome \"{$search}\"";
    }
}
