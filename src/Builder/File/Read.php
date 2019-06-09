<?php

namespace App\Builder\File;

class Read
{
    /** @var Config */
    protected $config;
    protected $file;
    protected $data = [];

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function run()
    {
        $this->data = [];
        $fileObject = new \SplFileObject($this->file);
        
        while ($line = $fileObject->getCurrentLine()) {
            if ($fileObject->key() > 0 || $this->config->getHasHeader() == 0) {
                // Remove final de linha
                $line = str_replace($this->config->getEndLine(), '', $line);
                // Separa em colunas
                $columns = array_filter(explode($this->config->getTypeSeparator(), $line));
                // Organiza keys
                $this->data[] = array_combine($this->config->getColumns(), $columns);
            }
            $fileObject->next();
        }

    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function getData()
    {
        return $this->data;
    }
}