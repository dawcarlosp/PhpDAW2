<?php
include "../modelo/Rectangulo.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>El área del rectangulo es:". Rectangulo::area($_POST['base'],$_POST['altura']) ."</h3>";
}
?>