<?php 
    include 'conexion.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $producto = $_POST['producto'];
        $precio = htmlentities($_POST['precio']);//$_REQUEST['precio'];
        $cantidad = $con->real_escape_string(htmlentities($_POST['cantidad']));
        $categoria = $con->real_escape_string(htmlentities($_POST['categoria']));
        $id = '';
        //Forma completa
        //$ins = $con->query("INSERT INTO inventario (id,producto,cantidad,precio,categoria) VALUES (DEFAULT,'$producto','$cantidad','$precio','$categoria')");
        
        //Forma corta
        //$ins = $con->query("INSERT INTO inventario VALUES (DEFAULT,'$producto','$cantidad','$precio','$categoria')");

        //Consulta preparada

        $ins = $con->prepare("INSERT INTO inventario VALUES (?,?,?,?,?)");

        $ins->bind_param("isids",$id,$producto,$cantidad,$precio,$categoria);

        if($ins->execute()){
            header("location:index.php");
        }else{  
            echo 'no guardo';
        }

        $ins->close();
        $con->close();
    }else{
        /*echo "<script>
        alert('Utiliza el formulario por favor');
        location.href = 'index.php';
        </script>";*/

        header("location:index.php");
    }
   

?>