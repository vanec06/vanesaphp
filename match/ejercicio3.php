<?php
$letra = readline ("Por favor ingrese una letra: ");

$resultado = match(strtolower($letra)){
    "a","e","i","o","u" => "usted escribio una vocal",
    default => "Usted escribio una consonante"
};
echo $resultado;

?>
