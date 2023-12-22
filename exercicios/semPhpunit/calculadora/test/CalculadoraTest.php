<?php 


use exercicios\semPhpunit\calculadora\Class\Calculadora;



class TestCalculadora {

    public function testSomar(int $valor1, int $valor2, int $valorEsperado) {

        $valorEsperado = $valorEsperado;

        $calculadora = new Calculadora();

        $valorRetornado = $calculadora->somar($valor1, $valor2);

        return $valorEsperado === $valorRetornado;
    }

}

$testCalculadora = new TestCalculadora();

var_dump($testCalculadora->testSomar(5,5,10));
var_dump($testCalculadora->testSomar(5,2,7));
var_dump($testCalculadora->testSomar(2,2,4));
var_dump($testCalculadora->testSomar(3,5,8));
var_dump($testCalculadora->testSomar(0,0,0));
var_dump($testCalculadora->testSomar(0,1,1));
var_dump($testCalculadora->testSomar(-1,1,0));


?>