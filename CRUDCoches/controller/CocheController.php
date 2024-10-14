<?php
class CocheController{
    private $coches;
    function __construct()
    {
       $this->coches = [
        1 => new Coche("Wolkswagen", "Polo", "negro", "Rebeca"),
        2 => new Coche("Toyota","Corolla","verde","Marcos"),
        3 => new Coche("Skoda","Octavia","gris","Mario"),
        4 => new Coche("Kia","Niro","azul","Jairo")
       ];
    }
    public function index(){
        $rowset = $this->coches;
        require("view/index.php");
    }
}
?>