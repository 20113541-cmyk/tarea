<?php

$palabra = $_POST['palabra'];

$caracteres = strlen($palabra);

echo "<h1>Su palabra tiene " . $caracteres . " letras</h1>";