<?php 
    function hola($nombre){
        echo "Hola"." "."{$nombre}";
        echo "<br>";
    }

    hola("Pedro");
    hola("Nico");


    function suma($valor1,$valor2){
        // + / * -
        $res = $valor1 + $valor2;
        return $res;
    }

    $var = 500;

    echo suma($var,1000);
?>