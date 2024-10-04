<?php
session_start();

if (!isset($_SESSION["array"])) {
    echo __LINE__;

    $_SESSION["array"] = array(0, 0, 0);
}

if (isset($_POST["modificar"])) {
    if (!empty($_POST["valor"]) || $_POST["valor"] == 0) {
        echo "MODIFICAR";

        $posicion = $_SESSION["posicioness"] = $_POST["posiciones"];

        $valor = $_SESSION["valorr"] = $_POST["valor"];


        echo "Posicion: " . $_SESSION["posicioness"] . "<br><br>";
        echo "Valor: " . $valor . "<br>";

        $_SESSION["array"][$posicion] = $valor;


        echo "<pre>";
        var_dump($_SESSION["array"]);
        echo "</pre>";
    }
} else if (isset($_POST["media"])) {
    $media = array_sum($_SESSION["array"]) / count($_SESSION["array"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Sessions 2</title>
</head>

<body>
    <h1>Modificar array guardada en una sesion:</h1>

    <form action="./EjercicioSession2.php" method="POST">
        position to modify
        <select name="posiciones" id="" required>
            <?php
            foreach ($_SESSION["array"] as $i => $value) {
                echo "<option value=" . $i . ">" . $i . "</option>";
            }

            ?>
        </select>
        <br>
        <br>

        Nuevo valor:
        <input type="number" name="valor" min="0">
        <br><br>

        <input type="submit" name="modificar" value="MODIFICAR">
        <input type="submit" name="media" value="MEDIA">
        <input type="reset" value="RESTABLECER">
        <br><br>
        <?php
        echo "(";
        foreach ($_SESSION["array"] as $key => $value) {
            if ($key != count($_SESSION["array"]) - 1) {
                echo $value . ", ";
            } else {
                echo $value;
            }
        }
        echo ")";
        if (isset($_POST["media"])) {
            echo "<br><br>La media es: $media";
        }

        ?>
    </form>

</body>

</html>
