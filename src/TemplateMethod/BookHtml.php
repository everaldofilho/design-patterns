<?php

namespace App\TemplateMethod;

class BookHtml extends BookAbstract
{
    public function buildStruct($title, $category): String
    {
        $html = sprintf('<h1>%s</h1>', $title);
        $html .= "<br><br>";
        $html .= sprintf('<h3>%s</h3>', $category);
        return $html;
    }
}
