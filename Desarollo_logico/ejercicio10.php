<?php
$lista = [];

echo "Ingrese los números en el rango de 0 a 10 (ingrese 'fin' para finalizar):\n";
for ($i = 1; ; $i++) {
    $numero = readline("Número $i: ");
    if ($numero === 'fin') {
        break;
    }
    $numero = intval($numero);
    if ($numero >= 0 && $numero <= 10) {
        $lista[] = $numero;
    } else {
        echo "Número fuera de rango. Ingrese un número entre 0 y 10.\n";
        $i--; 
    }
}

$longitud = count($lista);
for ($i = 0; $i < $longitud - 1; $i++) {
    for ($j = 0; $j < $longitud - $i - 1; $j++) {
        if ($lista[$j] > $lista[$j + 1]) {
            $temp = $lista[$j];
            $lista[$j] = $lista[$j + 1];
            $lista[$j + 1] = $temp;
        }
    }
}


echo "Lista ordenada de menor a mayor: ";
foreach ($lista as $numero) {
    echo $numero . " ";
}
?>