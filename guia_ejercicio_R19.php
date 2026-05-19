<?php 

$numero = $_POST['num'];

echo "<h1>Tabla de multiplicar del numero " . $numero . "</h1>";

for ($tabla = 1; $tabla <= 10; ++$tabla) {
    echo $numero . " x " . $tabla . " = " . ($numero * $tabla) . "<br>";
}

echo "<br><a href='guia_ejercicio19.html'>Volver al inicio</a>";
?>