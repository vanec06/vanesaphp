
<?php
$string= readline("Ingrese la cadena de texto: ");
 
$resultado = match (strlen($string)){
$string >=10 => "La cadena es larga",
default => "La cadena es corta"
};

echo $resultado;
?>