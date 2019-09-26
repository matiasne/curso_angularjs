<?php 
    /*
    ==
    ===
    !=
    <>
    <
    >
    <=
    >=
    <=>
    ?? Cuando el primer dato sea diferente de null

    &&
    ||
    NOT
    */
    $edad= 18;
    $genero = 'm';
    $peso = 100;

    if($edad >= 18){
        if($genero == "m" && $peso <= 100){
            echo "Es mayor de edad y es masculino. Puede hacer servicio militar y tiene el peso adecuado";
        }else{
            echo "Es mayor de edad pero no puede hacer el servicio militar ya que es femenino";
        }
    }else{
        echo "No es mayor de edad";
    }
?>