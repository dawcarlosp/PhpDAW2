<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área triángulo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
include "../modelo/Triangulo.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h3 class='alert alert-success'>El área del triangulo es:". Triangulo::area($_POST['base'], $_POST['altura']) ."</h3>";
}
?>
</body>
</html>