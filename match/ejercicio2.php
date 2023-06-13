<?php
$color = readline ("Ingrese el nombre de un color: ");

$resultado = match (strtolower($color)){
    "rojo" => "Color calido de primavera",
    "amarillo" => "Color calido de primavera",
    "azul" => "Color frio de invierno",
    "verde" => "Color calido de primavera",
    "morado" => "Color calido de  invierno",
    "cafe" => "Color calido de otoño",
    "blanco" => "Color frio de invierno",
    "negro" => "Color calido de otoño",
    "rosado" => "Color frio de verano",
    default => "Color desconocido"
};
echo $resultado;

?>
