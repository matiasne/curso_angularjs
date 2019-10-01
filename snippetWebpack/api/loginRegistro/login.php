<?php 
    include '../conexion.php';

    $email = $con->real_escape_string(htmlentities($_POST['email']));
    $pass = $con->real_escape_string(htmlentities($_POST['pass']));

    $sel = $con->query("SELECT id,user,foto,email,pass FROM usuarios WHERE email='$email'");

    if($f = $sel->fetch_assoc()){
        $correo = $f['email'];
        $password = $f['pass'];
        $user = $f['user'];
        $foto = $f['foto'];
        $id = $f['id'];
    }


    $passEncriptada= password_verify($pass, $password);

    if($email == $correo && $passEncriptada  == true){
        
        $token = sha1(rand(0000,9999));
        $up = $con->query("UPDATE usuarios SET token='$token' WHERE id='$id' ");

        if($up){
            $respuesta = array('token' => $token, 'res'=> 'success');
            echo json_encode($respuesta);
        }
    }else{
        $respuesta = array('token' => '', 'res'=> 'fail');
    }

?>