<?php

namespace App\TemplateMethod;

class BookMarkdown extends BookAbstract
{
    public function buildStruct($title, $category): String
    {
        $md = sprintf('# %s', $title);
        $md .= "\n\n";
        $md .= sprintf('## %s', $category);
        return $md;
    }
}
