<?php

namespace App\TemplateMethod;

class Book
{
    private $title;
    private $category;

    public function __construct($title, $category)
    {
        $this->title = $title;
        $this->category = $category;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
