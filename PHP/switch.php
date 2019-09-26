<?php 
    $dia = "Sabado";

    switch($dia){
        case "Lunes": 
            echo "El dia de hoy es {$dia}";
            brack;
        case "Martes": 
            echo "El dia de hoy es {$dia}";
            brack;
        case "Miercoles": 
            echo "El dia de hoy es {$dia}";
            brack;
        case "Jueves": 
            echo "El dia de hoy es {$dia}";
            brack;
        case "Viernes":
        case "Sabado": 
        case "Domingo":
            echo "El dia de hoy No se trabaja";
            brack;
        default:
            echo "El dia no existe";
            brack;
    }
?>