<?php

namespace semPhpunit\calculadora\Class;

use Strategy\CalculadoraStrategy;

class Calculadora extends CalculadoraStrategy
{
    public function somar() : float
    {
        

        return 10 ;
    }


    public function subtrair() : float
    {
        return 2;
    }

    public function multiplicar() : float
    {
        return 2;
    }

    public function dividir() : float
    {

        return 2;
    }
}

?>
