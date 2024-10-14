<?php
include "../modelo/Circulo.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $radio= $_POST['radio'];
    echo '<h3>El área del circulo es:'. Circulo::area($radio) .'</h3>';
}
?>