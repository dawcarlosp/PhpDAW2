<?php
$motos = array("Susuki","KTM","BMV","KIMCKO");
mostrarValores($motos);
mostrarValores2($motos);
//fUNCION PARA IMPRMIR ARRAYS
function mostrarValores($a){
    foreach ($a as $key => $valor) {
        echo $key . "->" . $valor . '<br>';
    }
}
//Funcion para imprimir arrays
function mostrarValores2($a){
    for ($i=0; $i < count($a) ; $i++) { 
        echo $i . "->" . $a[$i]. "<br>";
    }
}
echo '<br>';
print_r($motos);
?>