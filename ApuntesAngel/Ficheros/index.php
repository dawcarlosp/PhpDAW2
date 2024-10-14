<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fichero</title>
</head>

<body>
    <form action="form.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <label for="nombre">File:</label>
        <input type="file" name="fichero">
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>

</html>