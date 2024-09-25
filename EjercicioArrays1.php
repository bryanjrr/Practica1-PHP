<?php
/* Ejercicio1: */
echo "Ejercicio 1:";
echo "<br><br>";
$array = [
    "dato 1°" => "Sara",
    "dato 2°" => "Martinez",
    "dato 3°" => "23",
    "dato 4°" => "Barcelona"
];

/* $i Posicion */
/* $value Valor de la posicion */
foreach ($array as $i => $value) {
    echo "$i:$value<br>";
}

/* Ejercicio2: */
echo "<br><br>";
echo "<hr>";
echo "Ejercicio 2:";
echo "<br><br>";
$array2 = [
    "Nombre°" => "Sara",
    "Apellido" => "Martinez",
    "Edad" => "23",
    "Ciudad" => "Barcelona"
];

foreach ($array2 as $i => $value) {
    echo "$i:$value<br>";
}

echo "<br><br>";
echo "<hr>";
echo "Ejercicio 3:";
echo "<br><br>";

$array['dato 3°'] = 24;
foreach ($array as $i => $value) {
    echo "$i:$value<br>";
}

echo "<br><br>";
echo "<hr>";
echo "Ejercicio 4:";
echo "<br><br>";

unset($array["dato 4°"]);
var_dump($array);

echo "<br><br>";
echo "<hr>";
echo "Ejercicio 5:";
echo "<br><br>";

$letters = "a,b,c,d,e,f";

$array_letras = explode(",",$letters);
rsort($array_letras);
foreach ($array_letras as $i => $value) {
    echo "letter $i" . "°:$value<br>";
}

echo "<br><br>";
echo "<hr>";
echo "Ejercicio 6:";
echo "<br><br>";

$calificaciones = [
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Luis"=> 7,
    "Miguel"=> 5,
    "Aitor"=> 4,
    "Pepe"=> 1
];

/* Ordenar */
arsort($calificaciones);

foreach ($calificaciones as $i => $value) {
    echo "$i: $value<br>";
}

echo "<br><br>";
echo "<hr>";
echo "Ejercicio 7:";
echo "<br><br>";

$alumnos = 0;

$sumaNotas = array_sum($calificaciones);
$alumnos = count($calificaciones);
$media = $sumaNotas / $alumnos;

echo "La media de las notas es:" . number_format($media,2);

$alumnosEncima = [];

foreach($calificaciones as $i => $value){

    if($value > $media){
        $alumnosEncima[$i] = $value;
    }

}

echo "<br><br>Los alumnos que estan por encima de la media son:";

echo "<ul>";
foreach ($alumnosEncima as $i => $value){
    echo "<li>$i</li>";
}
echo "</ul>";

echo "<hr>";
echo "Ejercicio 8:";
echo "<br><br>";

$notaAlta = 0;
$Alumno = "";

foreach($calificaciones as $i => $value){
    if($value > $notaAlta){
        $notaAlta = $value;
        $Alumno = $i;
    }
}

echo "La nota mas alta es $notaAlta y el mejor alumno es $Alumno";














