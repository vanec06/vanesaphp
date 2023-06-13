<?php  

$num = readline ("Por favor escriba un numero para que nos diga el dia de la semana correspondiente");

if($num == 1 ){
echo "Dia lunes:";
}

elseif ($num  == 2){
    echo "Dia martes";
}
elseif($num  == 3){
    echo "Dia miercoles";
}
elseif ($num  == 4){
    echo "Dia jueves";
}
elseif ($num  == 5){
    echo "Dia viernes";
}
elseif ($num  == 6){
    echo "Dia sabado";
}
elseif($num  == 7){
    echo "Dia domingo";
}else  {
    echo "Lo siento no te conosco";
}
?>