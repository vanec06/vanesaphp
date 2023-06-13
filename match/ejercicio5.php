<?php
$dia = (int)readline ("Por favor ingrese un numero para conocer que dia es: ");

$resultado = match($dia){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sabado",
    7 => "Domingo",
    default => "El numero no concide con ningun dia"
};
echo $resultado;

?>