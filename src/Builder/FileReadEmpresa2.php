<?php

namespace App\Builder;

use App\Builder\File\ReadFile;
use App\Builder\File\Column;

class FileReadEmpresa2 extends ReadFile
{
    protected function buildConfig()
    {
        $this->config->setEndLine("\r\n");
        $this->config->setTypeSeparator("\t");
        $this->config->setHasHeader(1);
        $this->config
            ->addColumn(Column::NOME)
            ->addColumn(Column::TELEFONE)
            ->addColumn(Column::EMAIL);
    }
}
