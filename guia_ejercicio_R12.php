<?php

$bas = $_POST['base'];
$alt = $_POST['altura'];

$area = ($bas * $alt) /2;

echo "<h1>El area del triangulo es: " . $area . "</h1>";
echo "<br><a href='guia_ejercicio12.html'>Volver</a>";

?>