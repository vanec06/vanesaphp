<?php
$fecha = readline ("Ingrese una fecha en formato día-mes-año: ");
      list($dia, $mes, $year) = explode('-', $fecha);
      
      echo "La fecha ingresada es el $dia-$mes-$year. \n";

      $mes_texto = '';

      switch($mes) {
        case 1: $mes_texto = 'enero';
        break;
        case 2: $mes_texto = 'febrero';
        break;
        case 3: $mes_texto = 'marzo';
        break;
        case 4: $mes_texto = 'abril';
        break;
        case 5: $mes_texto = 'mayo';
        break;
        case 6: $mes_texto = 'junio';
        break;
        case 7: $mes_texto = 'julio';
        break;
        case 8: $mes_texto = 'agosto';
        break;
        case 9: $mes_texto = 'septiembre';
        break;
        case 10: $mes_texto = 'octubre';
        break;
        case 11: $mes_texto = 'noviembre';
        break;
        case 12: $mes_texto = 'diciembre';
        break;
      }