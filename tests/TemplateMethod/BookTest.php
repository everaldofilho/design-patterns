<?php

namespace Tests\TemplateMethod;

use PHPUnit\Framework\TestCase;
use App\TemplateMethod\Book;
use App\TemplateMethod\BookMarkdown;
use App\TemplateMethod\BookHtml;

class BookTest extends TestCase
{
    public function testTemplateMethod()
    {
        $book = new Book("Design Patterns com PHP 7", "PHP");

        $markdown = new BookMarkdown($book);
        $html = new BookHtml($book);

        $templateMarkdown = "# Design Patterns com PHP 7\n\n## PHP";
        $templateHtml = "<h1>Design Patterns com PHP 7</h1><br><br><h3>PHP</h3>";

        $this->assertEquals($templateMarkdown, $markdown->show());
        $this->assertEquals($templateHtml, $html->show());
    }
}
