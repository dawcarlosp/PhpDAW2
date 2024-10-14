<?php
require_once("Vehiculo.php");
class Autobus extends Vehiculo{
    private $empresa;
    function __construct($miMarca, $miModelo, $miColor, $miPropietario, $miEmpresa)
    {
        parent::__construct($miMarca, $miModelo, $miColor, $miPropietario);
        $this->empresa = $miEmpresa;
    }
    function setEmpresa($miEmpresa){
        $this->empresa = $miEmpresa;
    }
    function getEmpresa(){
        return $this->empresa;
    }
    function puedeAparcar($miPlanta){
        return (array_search($miPlanta, $this->getPlantas()) !== false && array_search($miPlanta,$this->getPlantas()) == 0);
    }
}
?>