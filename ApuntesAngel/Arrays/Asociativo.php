<?php
$arrais = array(
"Nombre"=>"Antonio",
"Apellido"=>"Perez"
);
echo $arrais["Nombre"];
echo "<br>";
print_r($arrais);
echo "<br>";
echo "Array dentro de un array";
echo "<br>";
$equipos = array(
    "Nombre equipo"=>"Madrid", "segundo" => 
    array(
        "Nombre equipo"=>"Barsa",
        "Jugador 1"=>"Messi",
        "Jugador 2"=>"Antonio"));
print_r($equipos);
echo "<br>";
echo $equipos["segundo"]["Nombre equipo"];
echo "<br>";
if(is_array($equipos)){
    echo "Es un array";
}else{
    echo "No es un array";
}
echo "<br>";
echo is_array($equipos) ? 'Es' : 'No es ';
echo "<br>";
echo is_string($equipos) ? 'Es string' : 'No es un string';
echo "<br>";
print_r(array_keys($equipos));
echo "<h1>Intento de operador ternario anidado</h1>";
$numero = 15;
$varia =  ($numero>=18) ? "Es mayor" : (($numero<10) ? "Menor de 10": "Mayor de 10");
echo $varia;
echo "<br>";
$equi = array(
    "1"=>"Barsa",
    "2"=>"Madrid"
);
$mesesAnio = array(
    "Enero" => 31,
    "Febrero"=> 28,
    "Marzo" => 31,
    "Abril" => 30,
    "Mayo" => 31,
    "Junio" => 30,
    "Julio" => 31,
    "Agosto" => 31,
    "Septiembre" => 30,
    "Octubre" => 31,
    "Noviembre" => 30,
    "Diciembre"=>31
);
foreach ($mesesAnio as $key => $value) {
    echo $key."=".$value."<br>";
}

foreach ($equi as $key => $value) {
    echo $value. "<br>";
}
?>