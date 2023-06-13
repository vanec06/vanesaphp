<?php
$mes = (int)readline ("Por favor ingrese un numero para conocer que mes es: ");

$resultado = match($mes){
1 => "Enero",
2 => "febrero",
3 => "marzo",
4 => "abril",
5 => "mayo",
6 => "junio",
7 => "julio",
8 => "agosto",
9 => "septiempre",
10 => "octubre",
11 => "noviembre",
12 => "diciembre",
default => "El numero no concide con ningun mes"
};
echo $resultado;

?>