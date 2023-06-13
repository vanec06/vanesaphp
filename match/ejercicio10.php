<?php
$opcion= (int) readline("Ingrese una opción del 1 al 5: "); 


$resultado = match ($opcion) {
1 => "Opción 1 seleccionada",
2 => "Opción 2 seleccionada",
3 => "Opción 3 seleccionada",
4 => "Opción 4 seleccionada",
5 => "Opción 5 seleccionada",
default => "La opción no es válida"

};
echo $resultado;

?>