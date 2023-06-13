<?php
$numero = readline("ingrese un numero para saber si es primo o no ");

function primo($numero)
{
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}
if (primo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}
?>?>