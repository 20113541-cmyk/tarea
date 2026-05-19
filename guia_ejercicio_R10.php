<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$promedio =($num1 + $num2 + $num3 )/3;

echo "<h1> su promedio es de: " . round($promedio, 2) . "</h1>";
echo "<br><a href='guia_ejercicio10.html'>Volver</a>";

?>