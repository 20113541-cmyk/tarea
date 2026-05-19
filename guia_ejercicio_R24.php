<?php
    header("Content-Type: text/html; charset=UTF-8");
    $edad = $_POST['edad'];
    $edad_futura = $edad + 10;

    echo "<h1>Tu edad actual es: " . $edad . " años<br>";
    echo "Dentro de 10 años tendras: " . $edad_futura . " años";
    echo "</h1><br><br><a href='guia_ejercicio24.html'>Volver al formulario</a>";
?>