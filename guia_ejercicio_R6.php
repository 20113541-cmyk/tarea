<?php 
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

echo "<h1>Bienvenido</h1>";
echo "<br>";
echo "Su nombre es: " . $nombre;
echo "<br><br>";
echo "Su edad es: " . $edad . " años";
echo "<br><br>";
echo "Gracias por sus datos";
echo "<br><a href='guia_ejercicio6.html'>Volver</a>";

?>