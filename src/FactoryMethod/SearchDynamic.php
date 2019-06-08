<?php

namespace App\FactoryMethod;

class SearchDynamic
{
    private $type;

    private $types = [
        'email' => Types\SearchEmail::class,
        'ip' => Types\SearchIp::class,
        'name' => Types\SearchName::class,
    ];

    public function search($search) : String
    {
        return $this->type->search($search);
    }

    public function searchAll($search) : String
    {
        $type = $this->getTypeSearch($search);

        $this->setType($type);

        return $this->search($search);
    }

    public function setType($type)
    {
        $class = $this->types[$type];
        $this->type = new $class;
    }

    private function getTypeSearch($search) : String
    {
        if (filter_var($search, FILTER_VALIDATE_EMAIL)) {
            return "email";
        } else if (filter_var($search, FILTER_VALIDATE_IP)) {
            return "ip";
        }
        return 'name';
    }

}