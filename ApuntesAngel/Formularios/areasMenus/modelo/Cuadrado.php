<?php
class Cuadrado{
    private $id;
    private $lado;
    private static $contador;
    // Constructor
    public function __construct($lado)
    {
        $this->lado = $lado;
        $this->id = Cuadrado::$contador++;
    }
    // Métodos getters y setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado)
    {
        $this->lado = $lado;
    }

    public static function area($lado){
        $area =  $lado * $lado;
        $resul = round($area);
        return $resul;
    }
}
    
?>