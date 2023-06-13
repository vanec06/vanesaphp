<?php
function palind($palabra) {
    $palabraU = readline("ingrese una palabra ");
    $palabra = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $palabra));
    $reversa = strrev($palabra); 

    if ($palabra === $reversa) {
        return true;
    } else {
        return false;
    }
}


$palabraU = $_POST['palabra'];

if (palind($palabraU)) {
    echo "La palabra '$palabraU' es un palíndromo ";
} else {
    echo "La palabra '$palabraU' no es un palíndromo ";
}
?>
 