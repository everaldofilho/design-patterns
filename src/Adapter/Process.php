<?php

namespace App\Adapter;

interface Process
{
    public function run(Person $person) : int;
    public function getMessage() : string;
}