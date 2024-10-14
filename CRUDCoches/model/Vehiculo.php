<?php
class Vehiculo{
 private $marca;
 private $modelo;
 private $color;
 private $propietario;
 private $planta;
private $plantas = array("superficie", "subterraneo1" , "subterraneo2");
    function __construct($miMarca, $miModelo, $miColor, $miPropietario)
    {
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->propietario = $miPropietario;
    }
    function setMarca($miMarca){
        $this->marca = $miMarca;
    }
    function setModelo($miModelo){
        $this->modelo = $miModelo;
    }
    function setColor($miColor){
        $this->color = $miColor;
    }
    function setPropietario($miPropietario){
        $this->propietario = $miPropietario;
    }
    function getMarca(){
        return $this->marca;
    }
    function getModelo(){
        return $this->modelo;
    }
    function getColor(){
        return $this->color;
    }
    function getPropietario(){
        return $this->propietario;
    }
    function setPlanta($miPlanta){
        $this->planta = $miPlanta;
    }
    function getPlanta(){
        return $this->planta;
    }
    function setPlantas($miPlantas){
        $this->plantas = $miPlantas;
    }
    function getPlantas(){
        return $this->plantas;
    }
}
?>