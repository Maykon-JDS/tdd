<?php

namespace Strategy;

use Strategy\CalculadoraStrategy;

require_once "CalculadoraStratedy.php";

class Calculadora extends CalculadoraStrategy
{
    public function somar() : float
    {
        

        return 10 ;
    }


    public function subtrair($a, $b) : float
    {
        return $a - $b;
    }

    public function multiplicar($a, $b) : float
    {
        return $a * $b;
    }

    public function dividir($a, $b) : float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Divisão por zero não é permitida.");
        }

        return $a / $b;
    }
}

?>
