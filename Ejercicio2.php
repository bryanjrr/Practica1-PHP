<?php

$numero = rand(1, 10);

echo "El número es $numero";
echo "<br>";

$dia = ""; // Nueva variable para almacenar el día

switch ($numero) {
    case 1:
        $dia = "Lunes";
        break;
    case 2:
        $dia = "Martes";
        break;
    case 3:
        $dia = "Miércoles";
        break;
    case 4:
        $dia = "Jueves";
        break;
    case 5:
        $dia = "Viernes";
        break;
    case 6:
        $dia = "Sábado";
        break;
    case 7:
        $dia = "Domingo";
        break;
    default:
        $dia = "No corresponde a ningún día";
        break;
}

if($numero < 1 || $numero > 7) {
    echo "No corresponde a ningún día";
} else {
    echo "Hoy es $dia";
}

?>

