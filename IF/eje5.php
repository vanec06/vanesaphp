<?php  

$edad = readline ("Por favor ingrese su edad ");
$licencia= readline ("Por favor escriba si tiene licencia de condicir con un SI O NO ");

if($edad >= 18){
    echo "Es mayor de edad ";
    if($licencia == "si"){
        echo "Puedes conducir";
    }else{
        echo "Debes optener una licencia de conducir primero";
    }
}else {
    echo "Usted es menor de edad ";
}
?>