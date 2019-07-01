<?php

namespace Tests\Builder;

use PHPUnit\Framework\TestCase;

use \App\Builder\File\Config;
use \App\Builder\File\Read;
use \App\Builder\File\Column;
use \App\Builder\FileReadEmpresa1;
use \App\Builder\FileReadEmpresa2;

class FileReadTest extends TestCase
{
    public function testFileReadConfiguracao()
    {
        $fileRead = new Config;
        $fileRead->setTypeSeparator(';');
        $fileRead->setHasHeader(0);
        $fileRead
            ->addColumn(Column::EMAIL)
            ->addColumn(Column::NOME)
            ->addColumn(Column::TELEFONE);

        $columns = $fileRead->getColumns();

        $this->assertEquals(";", $fileRead->getTypeSeparator());
        $this->assertEquals(0, $fileRead->getHasHeader());
        $this->assertEquals("email", $columns[0]);
        $this->assertEquals("nome", $columns[1]);
        $this->assertEquals("telefone", $columns[2]);
    }

    public function testFileRead()
    {
        $config = new Config();
        $config->setEndLine("\n");
        $config->setTypeSeparator(';');
        $config->setHasHeader(1);
        $config
            ->addColumn(Column::NOME)
            ->addColumn(Column::EMAIL)
            ->addColumn(Column::TELEFONE);

        $fileRead = new Read($config);
        $fileRead->setFile(__DIR__ . '/arquivo/file.csv');
        $fileRead->run();

        $data = $fileRead->getData();
        $firstLine = $data[0];

        $this->assertEquals('Claudia Sarah Gabrielly Baptista', $firstLine['nome']);
        $this->assertEquals('claudiasarahgabriellybaptista_@locare-eventos.com.br', $firstLine['email']);
        $this->assertEquals('(83) 2743-3017', $firstLine['telefone']);
    }

    public function testReadFile1()
    {
        // Bussiness one context head with tree columns (nome, email, telefone)

        $fileRead = new FileReadEmpresa1;
        $fileRead->setFile(__DIR__ . "/arquivo/empresa1.csv");

        $data = $fileRead->run()->getData();
        $firstLine = $data[0];

        $this->assertEquals('Claudia Sarah Gabrielly Baptista', $firstLine['nome']);
        $this->assertEquals('claudiasarahgabriellybaptista_@locare-eventos.com.br', $firstLine['email']);
        $this->assertEquals('(83) 2743-3017', $firstLine['telefone']);
    }

    public function testReadFile2()
    {
        $fileRead = new FileReadEmpresa2;
        $fileRead->setFile(__DIR__ . "/arquivo/empresa2.csv");

        $data = $fileRead->run()->getData();
        $firstLine = $data[0];

        $this->assertEquals('Claudia Sarah Gabrielly Baptista', $firstLine['nome']);
        $this->assertEquals('claudiasarahgabriellybaptista_@locare-eventos.com.br', $firstLine['email']);
        $this->assertEquals('(83) 2743-3017', $firstLine['telefone']);
    }
}
