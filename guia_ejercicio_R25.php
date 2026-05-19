<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $ciudad = $_POST['ciudad'];

    echo "<center>";
    echo "<h1>Datos del Usuario</h1>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo electronico: " . $correo . "<br>";
    echo "Ciudad: " . $ciudad;
    echo "</center><br><br><a href='guia_ejercicio25.html'>Volver al formulario</a>";
?>