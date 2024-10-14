<?php
class Triangulo{
    private $id;
    private $base;
    private $altura;
     // Constructor
     public function __construct($base,$altura)
     {
         $this->base = $base;
         $this->altura = $altura;
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
 
     public function getBase()
     {
         return $this->base;
     }
 
     public function setBase($base)
     {
         $this->base = $base;
     }
     public function getAltura()
     {
         return $this->altura;
     }
 
     public function setAltura($altura)
     {
         $this->altura = $altura;
     }
     public static function area($base , $altura){
         $area =  ($base * $altura)/2 ;
         $resul = round($area);
         return $resul;
     }

}
?>