
<?php 
$numero = readline("Por favor, escriba el número al cual le quiere sacar el factorial: ");
$factorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $factorial = $factorial * $i;
}

echo "Factorial de $numero = $factorial";
?> 