<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áreas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   <div class="container ">
   <form method="POST" action="index.php" class="class-form">
    <h1>Área calculator</h1>
    <select name="select">
        <option value="cuadrado"
        <?php echo (isset($_POST['select']) && $_POST['select'] == 'cuadrado') ? "selected" : "" ?>
        >Cuadrado</option>
        <option value="rectangulo"
        <?php echo (isset($_POST['select']) && $_POST['select'] == 'rectangulo') ? "selected" : "" ?>
        >Rectangulo</option>
        <option value="circulo"
        <?php echo (isset($_POST['select']) && $_POST['select'] == 'circulo') ? "selected" : "" ?>
        >Circulo</option>
        <option value="triangulo"
        <?php echo (isset($_POST['select']) && $_POST['select'] == 'triangulo') ? "selected" : "" ?>
        >Triangulo</option>
    </select>
    <input type="Submit" value="Mostrar Formulario" name="btn_enviar">
    </form>
    <?php
    if(isset($_POST['select'])){
        $seleccion = $_POST['select'];
        if($seleccion == "cuadrado"){
            include "./vistas/cuadrado.php";
        }else if($seleccion == "rectangulo"){
            include "./vistas/rectangulo.php";
        }else if($seleccion == "circulo"){
            include "./vistas/circulo.php";
        }else if($seleccion == "triangulo"){
            include "./vistas/triangulo.php";
        }else{

        }
    } 
    ?>
   </div>
</body>
</html>