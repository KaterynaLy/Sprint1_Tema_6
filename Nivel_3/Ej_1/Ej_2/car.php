/*Implementa una clase Car que tenga información sobre un coche (marca, matrícula, tipos de combustible,
velocidad máxima). Además, implementa un Trait llamado Turbo que tenga un método boost()
que muestre un mensaje "Se ha iniciado el turbo". Usa este método desde la clase Car.*/
<?php
abstract class Car
{
    private $marca;
    private $matricula;
    private $comustible;
    private $velocidadMax;

    function __construct($marca, $matricula, $comustible, $velocidadMax)
    {
        $this->marca = $marca;
        $this->matricula = $matricula;
        $this->comustible = $comustible;
        $this->velocidadMax = $velocidadMax;
    }
}

trait Turbo
{
    function boost()
    {
        echo "Se ha iniciado el turbo.";
    }

}
