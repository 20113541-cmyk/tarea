<?php

$numero = $_POST['num'];

$suma = 0;

for ($s = 1; $s <= $numero; $s++ ) {
    $suma = $suma + $s;
}
echo "la suma total es: " . $suma;

echo "<br><a href='guia_ejercicio20.html'>Volver al inicio</a>";
?>