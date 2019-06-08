<?php

namespace Tests\Prototype;

use PHPUnit\Framework\TestCase;
use App\Prototype\Consultation;

class ConsultationTest extends TestCase
{
    public function testConsulta()
    {
        $patients = ['Maria', 'João', 'Gustavo', 'Fernando'];

        $consultationPrototype = new Consultation();
        $consultationPrototype->setNameUser("User Name");
        $consultationPrototype->setNameDoctor("Doctor Cristiano");

        $consultations = [];

        foreach ($patients as $patient) {
            $consultationCreate = clone $consultationPrototype;
            $consultationCreate->setNamePatient($patient);
            $consultations[] = $consultationCreate;
        }

        $this->assertEquals(4, count($consultations));

        // First Consultation
        $consultation = $consultations[0];

        $this->assertEquals("User Name", $consultation->getNameUser());
        $this->assertEquals("Doctor Cristiano", $consultation->getNameDoctor());
        $this->assertEquals("Maria", $consultation->getNamePatient());

        // End Consultation
        $consultation = end($consultations);

        $this->assertEquals("User Name", $consultation->getNameUser());
        $this->assertEquals("Doctor Cristiano", $consultation->getNameDoctor());
        $this->assertEquals("Fernando", $consultation->getNamePatient());
    }
}
