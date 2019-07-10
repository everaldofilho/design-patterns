<?php

namespace App\TemplateMethod;

class BookMarkdown extends BookAbstract
{
    public function buildStruct($title, $category): String
    {
        $markdown = sprintf('# %s', $title);
        $markdown .= "\n\n";
        $markdown .= sprintf('## %s', $category);
        return $markdown;
    }
}
