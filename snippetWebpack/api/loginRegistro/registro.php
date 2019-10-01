<?php 
    include '../conexion.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = $con->real_escape_string(htmlentities($_POST['usuario']));
        $pass = $con->real_escape_string(htmlentities($_POST['pass']));
        $email = $con->real_escape_string(htmlentities($_POST['email']));

        $extension = '';

        $ruta= 'http://localhost/curso_angularjs/snippetWebpack/api/loginRegistro/foto_perfil';

        $archivo = $_FILES['foto']['tmp_name'];

        $nombre_archivo= $_FILES['foto']['name'];

        $info= pathinfo($nombre_archivo);

        if($archivo != ''){
            $extension= $info['extension'];
            if ($extension == 'png' || $extension == 'PNG' || $extension == 'jpg' || $extension == 'JPG' ) {
                $nombreFile= $usuario.rand(0000,9999).'.'.$extension;
                move_uploaded_file($archivo,'foto_perfil/'.$nombreFile);
                $ruta= $ruta.'/'.$nombreFile;

            } else {
                echo "fail";
                exit;
            }
            
        }else{
            $ruta= 'http://localhost/curso_angularjs/snippetWebpack/api/loginRegistro/foto_perfil/perfil.png';
        }


        $passEncriptar = password_hash($pass, PASSWORD_BCRYPT);

        $ins = $con->query("INSERT INTO usuarios VALUES(DEFAULT,'$usuario','$email','$passEncriptar','$ruta',null)");

        if($ins){
            echo "success";
        }else{
            echo "fail";
        }

    }else{
        header("location:../../index.php");
    }
?>