
<?php 
$numero = readline("por favor escriba el numero al cual le quiere sacar la factorial");
function obtieneFactorial($numero){ 
    $factorial = 1; 
    for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 
    
$resultado = obtieneFactorial($numero); 
echo "Factorial de $numero  = $resultado"; 
?> 