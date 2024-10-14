<?php
$usuario = "Calvo";
$valor = '';
echo "<center><h1 style='color:red'>Hola</h1><p>Calvo</p></center>";
echo "<center><label for='nombre' name='nombre'>Nombre:</label><input/></center>";
echo "<center><button type='Submit'>Enviar</button></center>";
$valor = htmlspecialchars($_GET['nombre']);
echo $valor;
?>