<?php 

$gasto = $_POST['gasto'];

$descuento = 0.10;
$des = $gasto * $descuento;
$total = $gasto - $des;

if ($gasto >= 100){
    echo "<h1>Usted tiene un descuento del 10% en su compra. Su total es de $" . $total . "</h1>";
} else {
    echo "<h1>Usted no tiene descuento en su compra. Su total es de $" . $gasto . "</h1>";
}
echo "<br><a href='guia_ejercicio17.html'>Volver</a>";
?>