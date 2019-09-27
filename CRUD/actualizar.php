<?php 
    include 'conexion.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $producto = $_POST['producto'];
        $precio = htmlentities($_POST['precio']);//$_REQUEST['precio'];
        $cantidad = $con->real_escape_string(htmlentities($_POST['cantidad']));
        $categoria = $con->real_escape_string(htmlentities($_POST['categoria']));
        $id = $con->real_escape_string(htmlentities($_POST['id']));;
        //Forma normal

        //$up = $con->query("UPDATE inventario SET producto='$producto', cantidad='$cantidad', precio='$precio', categoria='$categoria' WHERE id= '$id' ");

        //Consulta preparada

        $up = $con->prepare("UPDATE inventario SET producto=?, cantidad=?, precio=?, categoria=?  WHERE id= ? ");

        $up->bind_param("sidsi",$producto,$cantidad,$precio,$categoria,$id);

        if($up->execute()){
            header("location:index.php");
        }else{  
            echo 'no se actualizo';
        }

        $up->close();
        $con->close();
    }else{
        /*echo "<script>
        alert('Utiliza el formulario por favor');
        location.href = 'index.php';
        </script>";*/

        header("location:index.php");
    }
   

?>