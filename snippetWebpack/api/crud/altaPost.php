<?php 
    include '../conexion.php';

    foreach ($_POST as $campo => $valor) {
        $var = "$".$campo."='".$valor."';";
        eval($var);
    }
    
    $id=null ;

    $sel = $con->query("SELECT user,foto FROM usuarios WHERE token = '$token' ");

    if($f = $sel->fetch_assoc()){
        $user = $f['user'];
        $foto = $f['foto'];
    }

    $ins = $con->prepare("INSERT INTO snippets VALUES (?,?,?,?,?,?,?)");
    $ins->bind_param("issssss",$id,$user,$foto,$titulo,$codigo,$descripcion,$categoria);
   
    if ($ins->execute()) {
       echo "success";
    } else {
        echo "fail";
    }

    $ins->close();
    $con->close();
?>