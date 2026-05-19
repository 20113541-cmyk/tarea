<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

if ($numero1 < $numero2){
    echo "el numero " . $numero1 . " es mayor";
} else {
    echo "el numero " . $numero2 . "es mayor";
}
echo "<br><a href='guia_ejercicio7.html'>Volver</a>";

?>
