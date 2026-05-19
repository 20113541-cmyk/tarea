<?php

$nombre = $_POST['nombre'];
$horas= $_POST['horas'];
$pago = $_POST['pago'];

$sueldo = $horas * $pago;
echo "<h1>" . $nombre . ", su sueldo es de " . $sueldo . " dolares</h1>";
echo "<br><a href='guia_ejercicio16.html'>Volver</a>";
?>