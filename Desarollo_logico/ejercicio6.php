
<?php
$numero = readline("ingrese un numero para invertirlo ");

$numeroIn = 0;
$numeroTe = $numero;

for ($i = strlen($numero) - 1; $i >= 0; $i--) {
    $digito = $numeroTe % 10;
    $numeroIn = ($numeroIn * 10) + $digito;
    $numeroTe = (int)($numeroTe / 10);
}
echo "Número original:$numero \n Resultado $numeroIn";

?>