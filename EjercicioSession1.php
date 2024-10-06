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
            <input type="text" name="nombreT" class="trabajador" required>
        </label>





        <h1>Choose product</h1>

        <select name="refresco" id="" required>
            <option value="soft_drink">soft_drink</option>
            <option value="milk">Leche</option>
        </select>






        <h1>Cantidad Producto</h1>

        <input type="number" name="cantidad" class="cantidad" required>

        <br><br> <input type="submit" value="add" name="add">
        <input type="submit" value="remove" name="remove">
        <input type="reset" value="reset" name="reset">


        <h1>Inventario:</h1>
    </form>
</body>

</html>
<?php

session_start();

/* echo __LINE__;
 */
/* echo "<pre>";
var_dump($_SESSION);
echo "</pre>"; */


if (!isset($_SESSION["inventario"])) {
/*     echo __LINE__;
 */
    $_SESSION["inventario"] = [
        "soft_drink" => 0,
        "milk" => 0
    ];
}

if (isset($_POST["nombreT"]) && isset($_POST["refresco"]) && isset($_POST["cantidad"])) {

    $nombreTrabajador = $_SESSION["nombreTrabajador"] = $_POST["nombreT"];

    $bebida = $_SESSION["refrescoo"] = $_POST["refresco"];

    $cantidadProducto = $_SESSION["cantidadd"] = $_POST["cantidad"];

    if (isset($_POST["add"])) {
        $_SESSION["inventario"][$bebida] += $cantidadProducto;

/*         var_dump($_SESSION["inventario"]);
 *//*         var_dump($_SESSION["inventario"][$bebida]);
 */    } else if (isset($_POST["remove"])) {


        if ($cantidadProducto > $_SESSION["inventario"][$bebida]) {

            $_SESSION["inventario"][$bebida] = 0;
        } else {
            $_SESSION["inventario"][$bebida] -= $cantidadProducto;
        }
    }

    echo "<br><br>";
    echo "<p>Producto</p>";
    echo "Leche: " . $_SESSION["inventario"]["milk"];
    echo "<br><br>";
    echo "Agua:" . $_SESSION["inventario"]["soft_drink"];
} else {
    echo "Debes de rellenar todos los campos!";
}



?>
