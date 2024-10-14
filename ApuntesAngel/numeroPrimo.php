<?php
$numero = 2;
$resto = 0;
$primo = true;

for ($i=2; $i <= $numero ; $i++) {
    $resto = $numero % $i;
    if($i != $numero){
        if($resto == 0){
            $primo = false;
        }
    }
}
if($primo==false){
    echo $numero." no es primo";
}else{
    echo $numero." es primo";
}
?>