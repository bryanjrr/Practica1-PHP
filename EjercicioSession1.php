<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Session1</title>
</head>

<body>
    <form action="EjercicioSession1.php" method="post">
        <h1 class="supermaket">Supermarket management</h1>

        <label for="">
            Nombre del trabajador:
            <input type="text" name="nombreT" value="pere" class="trabajador">
        </label>

        <h1>Choose product</h1>
        <select name="refresco" id="">
            <option value="Agua">Agua</option>
            <option value="Leche">Leche</option>
        </select>

        <h1>Cantidad Producto</h1>

        <input type="number" name="cantidad" class="cantidad">
        <br><br> <input type="submit" value="add" name="add">
        <input type="submit" value="remove" name="remove">
        <input type="submit" value="reset" name="reset">


        <h1>Inventario:</h1>
    </form>
</body>

</html>
<?php

if (isset($_POST["nombreT"])) {

    session_start();

    $_SESSION["nombreTrabajador"] = $_POST["nombreT"];

    $nombreTrabajador = $_SESSION["nombreTrabajador"];

}

$_SESSION["nombre"] = $nombreTrabajador;

$opcionSeleccionada = $_POST["refresco"];

if (isset($opcionSeleccionada)) {

    
}











?>