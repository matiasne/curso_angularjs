<?php 
    include 'conexion.php';

    $id= htmlentities($_GET['id']);

    //Forma Normal
    //$id = $con->query("DELETE FROM inventario WHERE id= '$id' ");

    //Forma preparada
    $up = $con->prepare("DELETE FROM inventario WHERE id= ?");

    $up->bind_param("i",$id);

    if($up->execute()){
        header("location:index.php");
    }else{
        echo "No Elimina";
    }

?>