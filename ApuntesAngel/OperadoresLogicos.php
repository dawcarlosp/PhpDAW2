<?php
$dinero = true;
$tiempo = true;
$cenaFuera = false;
if($dinero & $tiempo){
    $cenaFuera = true;
}else{
    $cenaFuera = false;
}
if($cenaFuera){
    echo "Hoy ceno fuera";
}else{
    echo "Hoy ceno en mi casa o ni ceno";
}
//Asignacion
//== compara solo valor
//=== comprueba valor y tipo
$a="a";
$b="b";
$c="c";
echo "<br>".$a." ".$b." ".$c."<br>";
$a=$b=$c="Hola Mundo";
echo $a." ".$b." ".$c."<br>";
?>