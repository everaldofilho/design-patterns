<?php

namespace App\FactoryMethod\Types;

class SearchEmail implements Search
{
    public function search(string $search) : String
    {
        // Code with criterion of the search for Email
        return "Pesquisando pelo Email \"{$search}\"";
    }
}
