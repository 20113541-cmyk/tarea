<?php
$dolares = $_POST['dolares'];

$euros = $dolares * 0.85;

echo "<h1>" . $dolares . " dólares son equivalentes a " . round($euros, 2) . " euros.</h1>";
echo "<br><a href='guia_ejercicio22.html'>Volver</a>";
?>