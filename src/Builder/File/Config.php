<?php

namespace App\Builder\File;

class Config
{
    protected $endLine = "\r\n";
    protected $typeSeparator = ';';
    protected $hasHeader = 0;
    protected $columns = [];

    public function setTypeSeparator(String $type)
    {
        $this->typeSeparator = $type;
    }

    public function getTypeSeparator() : String
    {
        return $this->typeSeparator;
    }

    public function setHasHeader(int $header)
    {
        $this->hasHeader = $header;
    }

    public function getHasHeader() : int
    {
        return $this->hasHeader;
    }

    public function addColumn(String $column) : self
    {
        $this->columns[] = $column;
        return $this;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function setEndLine(String $endLine)
    {
        $this->endLine = $endLine;
    }

    public function getEndLine()
    {
        return $this->endLine;
    }
}