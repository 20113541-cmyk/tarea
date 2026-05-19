<?php

$num1 = $_POST['nume1'];
$num2 = $_POST['nume2'];
$num3 = $_POST['nume3'];
$promedio =($num1 + $num2 + $num3 )/3;

echo "<h1> su promedio es de: " . round($promedio, 2) . "</h1>";

if ($promedio >= 6) {
    echo "Usted aprobo, ¡Felicidades!";
} else {
    echo "Usted reprobo, (¡mejora pasmado!)";
}
echo "<br><a href='guia_ejercicio11.html'>Volver</a>";

?>