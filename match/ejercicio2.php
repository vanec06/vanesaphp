<?php
$color = readline("Escriba un color: ");

$resultado = match (strtolower($color)) {
    'rojo' => "Este color es cálido",
    'azul' => " Este color es frio",
    'amarillo' => "Este color es calido",
    "morado" => "Color calido ",
    
    default => "Color desconocido"
};

echo $resultado;
?>
