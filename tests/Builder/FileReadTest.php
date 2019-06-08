<?php

namespace Tests\Builder;

use PHPUnit\Framework\TestCase;

use App\Builder\FileReadConfiguration;
use App\Builder\FileRead;
use App\Builder\FileReadEmpresa1;
use App\Builder\FileReadEmpresa2;

class FileReadTest extends TestCase
{

    public function testFileReadConfiguracao()
    {
        $fileRead = new FileReadConfiguration();
        $fileRead->setTypeSeparator(';');
        $fileRead->setHasHeader(false);
        $fileRead
            ->addColumn('email')
            ->addColumn('nome')
            ->addColumn('telefone');

        $columns = $fileRead->getColumns();

        $this->assertEquals(";", $fileRead->getTypeSeparator());
        $this->assertEquals(false, $fileRead->getHasHeader());
        $this->assertEquals("email", $columns[0]);
        $this->assertEquals("nome", $columns[1]);
        $this->assertEquals("telefone", $columns[2]);
    }

    public function testFileRead()
    {
        $readConf = new FileReadConfiguration();
        $readConf->setTypeSeparator(';');
        $readConf->setHasHeader(false);
        $readConf
            ->addColumn('email')
            ->addColumn('nome')
            ->addColumn('telefone');

        $fileRead = new FileRead($readConf);
        $fileRead->setFile(__DIR__ . 'file.csv');
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
        $fileRead->setFile(__DIR__ . "arquivo/empresa1.csv");

        $data = $fileRead->run()->getData();
        $firstLine = $data[0];

        $this->assertEquals('Claudia Sarah Gabrielly Baptista', $firstLine['nome']);
        $this->assertEquals('claudiasarahgabriellybaptista_@locare-eventos.com.br', $firstLine['email']);
        $this->assertEquals('(83) 2743-3017', $firstLine['telefone']);
    }

    public function testReadFile2()
    {
        $fileRead = new FileReadEmpresa2;
        $fileRead->setFile(__DIR__ . "arquivo/empresa2.csv");

        $data = $fileRead->run()->getData();
        $firstLine = $data[0];

        $this->assertEquals('Claudia Sarah Gabrielly Baptista', $firstLine['nome']);
        $this->assertEquals('claudiasarahgabriellybaptista_@locare-eventos.com.br', $firstLine['email']);
        $this->assertEquals('(83) 2743-3017', $firstLine['telefone']);

    }

}
