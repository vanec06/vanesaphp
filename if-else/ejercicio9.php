<?php 

$hora = readline('Ingrese una hora: '); //Hora de entrada

switch (true) {
    case (strtotime($hora) >= strtotime('00:00') && strtotime($hora) < strtotime('12:00')):
        echo "Buenos días";
        break;
    case (strtotime($hora) >= strtotime('12:00') && strtotime($hora) < strtotime('18:00')):
        echo "Buenas tardes";
        break;
    case (strtotime($hora) >= strtotime('18:00') && strtotime($hora) <= strtotime('23:59')):
        echo "Buenas noches";
        break;
    default:
        echo "Entrada inválida";
}
?>