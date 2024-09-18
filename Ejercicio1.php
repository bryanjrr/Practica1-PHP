<?php

echo "<br>";
echo "1.";
echo "<br>";

$n1 = rand(2,7);
$n2 = rand(2,7);
echo "Numero1: $n1";
echo "<br>";
echo "Numero2: $n2";
echo "<br>";

$suma = $n1 + $n2;
echo "<br>";
echo "Suma: $suma";
echo "<br>";
$resta = $n1 - $n2;
echo "Resta: $resta";
echo "<br>";
$division = $n1 / $n2;
echo "Division: $division";
echo "<br>";

echo "<br>";
echo "2.";
echo "<br>";

if($n1 > $n2){
    echo "$n1 es mayor que $n2";
}else if($n1 == $n2){
    echo "$n1 es igual a $n2";
}else{
    echo "$n2 es mayor a $n1";
}
echo "<br>";



/* 3 */

echo "<br>";
echo "3.";

if($n1 > 1 && $n2 > 1){

    $area = ($n1 * $n2) / 2;

    echo"<br>";
    echo"base $n1";
    echo"<br>";
    echo"altura $n2";
    echo "<br> El area de un triangulo es $area";

}







