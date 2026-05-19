<?php

$celsius = $_POST['celsius'];
$Fahrenheit = ($celsius * 9/5) + 32;

echo "<h1>El total es de " . $Fahrenheit . " °F</h1>";
echo "<br><a href='guia_ejercicio15.html'>Volver</a>";

?>