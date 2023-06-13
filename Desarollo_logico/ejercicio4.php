<?php
$palabra = readline("Ingrese una palabra: ");
$palabraI = strrev($palabra);

if ($palabra == $palabraI) {
    echo "La palabra '$palabra' es un palíndromo.";
} else {
    echo "La palabra '$palabra' no es un palíndromo.";
}
?>
 