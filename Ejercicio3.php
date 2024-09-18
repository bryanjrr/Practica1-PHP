<?php

$n1 = rand(11, 20);

$n2 = rand(11, 20);

echo "1.";
echo "<br><br>";

echo "<hr>";
echo "For";
echo "<br><br>";


echo "Numero 1: $n1";

echo "<br>";
echo "<br>";


for ($i = 0; $i <= $n1; $i++) {
    echo "| $i | <br>";
}
echo "<br>";

echo "Numero 2: $n2";

echo "<br>";
echo "<br>";

for ($j = 0; $j <= $n2; $j++) {
    echo "| $j | <br>";
}

$i = 0;
$j = 0;

echo "<br><br>";
echo "<hr>";
echo "While";
echo "<br><br>";



while ($i <= $n1) {
    echo $i;
    $i++;
}

echo "<br><br>";


while ($j <= $n2) {
    echo $j;
    $j++;
}

echo "<br><br>";

echo "<hr>";
echo "Do-While";
echo "<br><br>";


$i = 0;
$j = 0;

echo "Numero 1: $n1";

echo "<br>";
echo "<br>";

do {

    echo $i;
    $i++;
} while ($i <= $n1);
echo "<br><br>";

echo "Numero 2: $n2";

echo "<br>";
echo "<br>";

if ($n1 > $n2) {
    echo $n1;
} else {
    do {

        echo $j;
        $j++;
    } while ($j <= $n1);
}
