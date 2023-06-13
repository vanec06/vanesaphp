<?php
echo "Números perfectos entre el 2 hasta el 100: ";

for ($numero = 2; $numero <= 100; $numero++) {
    $Resultado= 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $Resultado+= $i;
        }
    }

    if ($Resultado== $numero) {
        echo $numero . " ";
    }
}
?>