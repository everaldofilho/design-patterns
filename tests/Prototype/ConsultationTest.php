<?php

namespace Tests\Prototype;

use PHPUnit\Framework\TestCase;

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

        $this->assertEquals($consultation->getNameUser(), "User Name");
        $this->assertEquals($consultation->getNameDoctor(), "Doctor Cristiano");
        $this->assertEquals($consultation->getNamePatient(), "Maria");

        // End Consultation
        $consultation = end($consultations);

        $this->assertEquals($consultation->getNameUser(), "User Name");
        $this->assertEquals($consultation->getNameDoctor(), "Doctor Cristiano");
        $this->assertEquals($consultation->getNamePatient(), "Fernando");
    }
}
