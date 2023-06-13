<?php
$numero = readline("Ingrese un número para saber si es primo o no: ");

if ($numero <= 1) {
    echo "$numero no es un número primo.";
} else {
    $primo = true;

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo "$numero es un número primo.";
    } else {
        echo "$numero no es un número primo.";
    }
}
?>