<?php
$tabla=(int) readline("por favor ingrese un numero");

if ($tabla <1 || $tabla >12 ) {
    echo " error tabla no encontrada ";
}else{ 

    $num = 1;

do {
    $resultado = $tabla * $num;
    echo $tabla."x". $num."=".$resultado."\n";
    $num++ ;
}while ($num  <= 10);


}

?>