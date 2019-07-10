<?php

namespace App\TemplateMethod;

abstract class BookAbstract
{
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function show()
    {
        return $this->buildStruct($this->book->getTitle(), $this->book->getCategory());
    }

    abstract public function buildStruct($title, $category): String;
}
