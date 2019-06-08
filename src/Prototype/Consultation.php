<?php

namespace App\Prototype;

class Consultation 
{
    protected $nameDoctor;
    protected $nameUser;
    protected $namePatient;
    
    public function setNameDoctor($name)
    {
        $this->nameDoctor = $name;
    }

    public function setNameUser($name)
    {
        $this->nameUser = $name;
    }

    public function setNamePatient($name)
    {
        $this->namePatient = $name;
    }

    public function getNamePatient()
    {
        return $this->namePatient;
    }

    public function getNameDoctor()
    {
        return $this->nameDoctor;
    }

    public function getNameUser()
    {
        return $this->nameUser;
    }
}
