<?php
$numero = (int) readline ("Ingrese un numero del 1 al 3: ");

$resultado = match($numero){
    3 => "Escribio un numero grande",
    2 => "Escribio un numero mediano",
    1 => "Escribio un numero pequeño",
    default => "No coincide con ninguna variable requerida"
};
 echo $resultado;

 ?>