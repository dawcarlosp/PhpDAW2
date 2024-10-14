<?php
$lado = htmlspecialchars($_GET['lado']);
$area = $lado*$lado;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área del cuadrado</title>
</head>
<body>
    <h1>
        <?php
        echo "El área del cuadrado es ". $area;
        ?>
    </h1>
</body>
</html>