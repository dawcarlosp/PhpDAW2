<?php
require_once("Vehiculo.php");
class Furgoneta extends Vehiculo{
    function puedeAparcar($miPlanta){
        return (array_search($miPlanta, $this->getPlantas()) !== false && array_search($miPlanta,$this->getPlantas()) < 2);
    }
}
?>