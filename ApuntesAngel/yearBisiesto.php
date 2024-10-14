<?php
$valor = null;
echo "Año bisiesto<br>";
$year = 2016;
if($year % 4 == 0){
    if($year % 100 == 0 ){
        if($year % 400 == 0){
            $valor = "Bisiesto";
        }else{
            $valor = "No bisiesto";
        }
    }else{
        $valor = "Bisiesto";
    }
}else{
    $valor = "No bisiesto";
}
?>