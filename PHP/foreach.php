<?php 
    $superHeroes = array("heroe1" => "bastman","heroe2" => "superman", "heroe3" => "hombre Araña");

    foreach ($superHeroes as $key => $value) {
        $var=$value;

        echo $var."<br>";
    }

    echo "<br>";

    $arraySimple = array(1,2,3,4,5,6,7,8,9);

    foreach ($arraySimple as $value) {
        $var2=$value;

        echo $var2."<br>";
    }
?>