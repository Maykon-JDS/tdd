<?php

namespace Strategy;

abstract class CalculadoraStrategy
{

    abstract public function somar() : float;

    abstract public function subtrair() : float;

    abstract public function multiplicar() : float;

    abstract public function dividir() : float;

}

?>