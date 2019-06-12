<?php

namespace App\Builder;

use App\Builder\File\Column;
use App\Builder\File\ReadFile;

class FileReadEmpresa1 extends ReadFile
{
    protected function buildConfig()
    {
        $this->config->setEndLine("\n");
        $this->config->setTypeSeparator(";");
        $this->config->setHasHeader(1);
        $this->config
            ->addColumn(Column::NOME)
            ->addColumn(Column::EMAIL)
            ->addColumn(Column::TELEFONE);
    }
}
