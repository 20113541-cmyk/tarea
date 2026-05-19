<?php
    $precio = $_POST['precio'];
    $IVA = $precio * 0.13;
    $total = $precio + $IVA;

    echo "<h1><center>Resultados<br>";
    echo "Precio sin IVA: $" . round($precio, 2) . "<br>";
    echo "IVA (13%): $" . round($IVA, 2) . "<br>";
    echo "Total con IVA: $" . round($total, 2);
    echo "<br><a href='guia_ejercicio23.html'>Volver</a>";
?>