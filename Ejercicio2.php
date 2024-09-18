<?php

$numero = rand(1, 10);

echo "El numero es $numero";
echo "<br>";

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

if($numero < 1 || $numero > 7){
    echo "No corresponde a ningun dia";
}else{
    echo "Hoy es $numero";
}


