<?php

$num1 = $_POST['Numero1'];
$num2 = $_POST['Numero2'];

if ($num1 > $num2){
    echo "El numero Mayor es: " . $num1;
} else {
    echo "El numero Mayor es: " . $num2;
}
echo "<br><a href='guia_ejercicio8.html'>Volver</a>";

?>