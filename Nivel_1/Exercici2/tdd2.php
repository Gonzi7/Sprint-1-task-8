<?php

use PHPUnit\Framework\TestCase;

require 'Exercici2.php';

class VerificarGradoTest extends TestCase {

    public function testPrimeraDivision() {
        $this->assertEquals('Primera Division', verificarGrado(70));
        $this->assertEquals('PrimeraDivision', verificarGrado(60));
    }

    public function testSegundaDivision() {
        $this->assertEquals('Segunda División', verificarGrado(59));
        $this->assertEquals('Segunda Division', verificarGrado(45));
    }

    public function testTerceraDivision() {
        $this->assertEquals('Tercera Division', verificarGrado(44));
        $this->assertEquals('Tercera Division', verificarGrado(33));
    }

    public function testReprobado() {
        $this->assertEquals('Reprobado', verificarGrado(32));
        $this->assertEquals('Reprobado', verificarGrado(0));
    }

    public function testEntradasInvalidas(){
        $this->assertEquals('Entrada invalidad', verificarGrado(-1));
        $this->assertEquals('Entrada invalida', verificarGrado("no es un numero"));
        $this->assertEquals('Entrada invalidad', verificarGrado(NULL));
    }
}

?>
