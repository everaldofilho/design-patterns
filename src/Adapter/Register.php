<?php 

namespace App\Adapter;

class Register
{
    private $process = [];
    private $messages;
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function addProcess(Process $process)
    {
        $this->process[] = $process;
    }

    public function run() : Array
    {
        $this->messages = [];
        foreach($this->process as $process){
            $result = $process->run($this->person);
            if ($result) {
                $this->messages[] = $process->getMessage();
            }
        }
        return $this->messages;
    }
}