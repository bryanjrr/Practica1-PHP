<?php

$numero = rand(1, 10);

switch ($numero) {
    case 1:
        $numero = "Lunes";
        break;
    case 2:
        $numero = "Martes";
        break;
    case 3:
        $numero = "Miercoles";
        break;
    case 4:
        $numero = "Jueves";
        break;
    case 5:
        $numero = "Viernes";

        break;
    case 6:
        $numero = "Sabado";
        break;
    case 7:
        $numero = "Domingo";
        break;
    default:
        $numero = "No corresponde a ningun dia";
        break;
}

echo "Hoy es $numero";

