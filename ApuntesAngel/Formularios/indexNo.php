<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
    include "form.php";
    if(isset($_GET['nombreB'])){
        $valorObtenido;
        $sor = htmlspecialchars($_GET['nombreB']);
        echo $valorObtenido. ' te has casado con '. $sor;
    }else{
        echo "Te has librado";
    }
    ?>
    <h3>Formulario</h3>
    <form action="form.php" method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <input type="Submit" value="enviar" name="btn_enviar">
    </form>
</body>
</html>