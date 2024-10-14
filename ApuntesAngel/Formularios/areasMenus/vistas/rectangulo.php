<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area del rectángulo</title>
</head>
<body>
<h3>Área del rectángulo</h3>
    <form action="./controladores/rectangulo.php" method="POST">
        <label for="base">Base:</label>
        <input type="text" name="base">
        <label for="altura">Altura:</label>
        <input type="text" name="altura">
        <input type="Submit" value="Calcular" name="btn_enviar">
    </form>
</body>
</html>