<?php

$nombre = $_POST['nombre'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$total_sin = $cantidad * $precio;
$IVA = $total_sin * 0.13;
$total = $total_sin + $IVA;

echo "<h2>Factura de compra</h2>";
echo "Nombre del cliente: " . $nombre . "<br>";
echo "Producto comprado: " . $producto . "<br>";
echo "Cantidad comprada: " . $cantidad . "<br>";
echo "Su subtotal es: $" . $total_sin . "<br>";
echo "Su total a pagar (incluyendo IVA) es: $" . $total;
echo "<br><br><a href='guia_ejercicio18.html'>Volver</a>";
?>
