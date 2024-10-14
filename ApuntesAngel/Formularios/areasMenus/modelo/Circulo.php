<?php
class Circulo{
    private $id;
    private $radio;
    private static $contador;
    // Constructor
    public function __construct($radio)
    {
        $this->radio = $radio;
        $this->id = Circulo::$contador++;
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

    public function getRadio()
    {
        return $this->radio;
    }

    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    public static function area($radio){
        $area = M_PI * (pow($radio,2));
        pi();
        $resul = round($area,2);
        return $resul;
    }
}
    
?>