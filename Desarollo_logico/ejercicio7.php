<?php
$numero = readline("Ingrese un número para verificar si se encuentra en la lista: ");

$lista = [2, 4, 5, 6, 7, 3];

$Resultado = array_search($numero, $lista);

if ($Resultado !== false) {
    echo "El elemento $numero se encuentra en la posición: $Resultado";
} else {
    echo "Elemento no encontrado";
}

?>