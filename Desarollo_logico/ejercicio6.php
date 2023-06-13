
<?php
$numero = readline("ingrese un numero para invertirlo ");

$numeroInvertido = 0;
$numeroTemporal = $numero;

for ($i = strlen($numero) - 1; $i >= 0; $i--) {
    $digito = $numeroTemporal % 10;
    $numeroInvertido = ($numeroInvertido * 10) + $digito;
    $numeroTemporal = (int)($numeroTemporal / 10);
}
echo "Número original:$numero \n Resultado $numeroInvertido";

?>