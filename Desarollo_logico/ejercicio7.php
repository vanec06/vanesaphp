<?php
$numero = readline("ingrese un numero para verificar si se encuentra en la lista ");
function buscarElemento($lista, $elemento)
{
    $posicion = array_search($elemento, $lista);
    return $posicion !== false ? $posicion : "Elemento no encontrado";
}

$lista = [4, 2, 7, 1, 9, 5];


$posicionElemento = buscarElemento($lista, $numero);


echo "El elemento $numero se encuentra en la posición: $posicionElemento";

?>