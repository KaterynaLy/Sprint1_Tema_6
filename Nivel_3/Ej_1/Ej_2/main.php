<?php
include("car.php");
use Turbo;

class Coche extends Car
{
    function __construct($marca, $matricula, $comustible, $velocidadMax)
    {
        parent::__construct($marca, $matricula, $comustible, $velocidadMax);
        $this->boost();
    }
}

$coche = new Coche("Lexus", "2666KCZ", "Hibrido", 180);


