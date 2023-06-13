<?php
$numero = readline("Ingrese un número: ");

$secuencia = [0, 1];

for ($i = 2; $secuencia[$i - 1] <= $numero; $i++) {
    $num1 = $secuencia[$i - 1] + $secuencia[$i - 2];
    $secuencia[] = $num1;
}

echo "Secuencia de Fibonacci hasta $numero: " . implode(", ", $secuencia);
?>