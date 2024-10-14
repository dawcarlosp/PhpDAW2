<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otra página</title>
</head>
<body>
    <h1>
        <?php
        $valorObtenido = htmlspecialchars($_GET['nombre']);
        echo "Hola " . $valorObtenido ?>
    </h1>
    <h3>Ingresa otro nombre y sorpresa</h3>
    <form action="index.php" method="GET">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombreB">
        <input type="Submit" value="enviar" name="btn_enviar">
    </form>
</body>
</html>