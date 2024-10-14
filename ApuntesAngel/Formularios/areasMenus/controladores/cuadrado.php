<?php
include "../modelo/Cuadrado.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado= $_POST['lado'];
    $cuadrado = new Cuadrado($lado);
    $id = $cuadrado->getId();
    $area = Cuadrado::area($cuadrado->getLado());
    echo "<h3>El área del cuadrado es: $area </h3>";
    echo "<h3>Su id es: $id </h3>";
}
?>