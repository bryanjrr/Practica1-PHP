<?php

$sumaNumero = 0;
$contadorPares = 0;
$contadorImpares = 0;


while ($sumaNumero <= 100) {

    $numero = rand(0, 20);

    if ($numero % 2 == 0) {
        $contadorPares++;
    } else {
        $contadorImpares++;
    }


    echo "Numero generado: $numero <br>";

    $sumaNumero += $numero;

    echo "Suma: $sumaNumero<br><br>";
}

echo "<hr>";
echo "<br>Contador de pares generados: $contadorPares<br><br>";
echo "Contador de impares generados: $contadorImpares<br><br>";
echo "El total es: $sumaNumero";
