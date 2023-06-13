<?php  
$num1 = readline ("por favor escriba un numero ");
$num2 = readline ("por favor escriba un numero ");

if( $num1 >10 && $num2 >10 ){
    echo "Ambos numeros son mayores que 10 ";
}
elseif( $num1 >= 10 && $num2 >=10 ){
    echo "Ambos numeros son iguales ";
}
elseif ( $num1 > 10 && $num2 <10   ){
    echo " Solo uno de los numeros es mayor que 10 ";
}
elseif ( $num1 < 10 && $num2 >10 ){
    echo " Solo uno de los numeros es mayor que 10 ";
}
elseif ( $num1 < 10 && $num2 <10 ){
    echo "Ninguno de los numeros  es mayor que 10 ";
}
?>