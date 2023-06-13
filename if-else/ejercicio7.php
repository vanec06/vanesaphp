<?php
$nota = (int) readline("por favor ingrese su nota numerica: ");

$resultado = match($nota){
$nota >= 90 && $nota <=100  => "aprobo la materia",
$nota >= 36 && $nota <= 85  => "paso raspando la materia",
$nota <= 35 => "reprobo la materia",
default => "No coincide con ninguna nota"
};
echo $resultado;

?>