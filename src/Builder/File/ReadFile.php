<?php

namespace App\Builder\File;

abstract class ReadFile
{
    /** @var Read */
    protected $read;

    /** @var Config */
    protected $config;

    public function __construct()
    {
        $this->config = new Config;
        $this->buildConfig();
        $this->buildRead();
    }

    abstract protected function buildConfig();

    protected function buildRead()
    {
        $this->read = new Read($this->config);
    }

    public function getData()
    {
        return $this->read->getData();
    }

    public function setFile(String $file)
    {
        $this->read->setFile($file);
    }

    public function run() : self
    {
        $this->read->run();
        return $this;
    }
}
