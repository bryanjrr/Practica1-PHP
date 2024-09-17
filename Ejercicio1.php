<?php

$n1 = rand(1,3);
$n2 = rand(1,3);
echo "Numero1: $n1";
echo "Numero2: $n2";
echo "<br>";



$suma = $n1 + $n2;
echo "<br>";
echo "Suma: $suma";
echo "<br>";
$resta = $n1 - $n2;
echo "Resta: $resta";
echo "<br>";
$multiplicacion = $n1 * $n2;
echo "Multiplicacion: $multiplicacion";
echo "<br>";
$division = $n1 / $n2;
echo "Division: $division";
echo "<br>";


if($n1 > $n2){
    echo "$n1 es mayor que $n2";
}else if($n1 == $n2){
    echo "$n1 es igual a $n2";
}else{
    echo "$n2 es mayor a $n1";
}








