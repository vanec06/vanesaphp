 <?php

$listaNumeros = readline(prompt:"ingrese cuantos numeros va a trabajar ");

 $notas = [];
 $suma =0;
 for ($i=1; $i <=$listaNumeros ; $i++) { 
    $notas [$i-1] = floatval(readline(prompt:"ingrese la nota $i \n"));
    $suma += $notas[$i-1];

 }
 $promedio = $suma/$listaNumeros;
 echo "el promedio es de ".$promedio;
 ?>