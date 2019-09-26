<?php 
    //Variables
    $nombre = "Alberto Nicolas";
    $entero= 12;
    $doble= 12.3;
    $bool = true;

    echo $nombre;
    echo "<br>";

    $nombre = "Jorge";

    echo "<br>";
    echo $nombre;
    //Constantes

    define("PI",3.1416);
    echo "<br>";
    echo PI;

    echo "<br>";
    //define("PI",55555);
    //echo PI;

    //CONCATENACIONES
    echo $nombre.' '.$entero;
    echo "<br>";
    echo "Hola como estas {$nombre}";

    
?>