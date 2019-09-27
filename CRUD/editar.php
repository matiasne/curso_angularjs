<?php 
    include 'conexion.php';
    
    $id = $con->real_escape_string(htmlentities($_GET['id']));
    $sel = $con->query("SELECT * FROM inventario WHERE id='$id' ");
    
    if($row = $sel->fetch_assoc()){

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>crud</title>
</head>
<body>
    <nav class="navbar navbar-light bg-info">
        <a href="#" class="navbar-brand">CRUD</a>
    </nav>

    <div class="container" style="padding-top: 30px">
        <form action="actualizar.php" method="POST">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $row['id']?>" >
                <input type="text" name="producto" placeholder="Producto" class="form-control" value="<?php echo $row['producto']?>">
            </div>
            <div class="form-group">
                <input type="number" name="cantidad" placeholder="Cantidad" class="form-control" value="<?php echo $row['cantidad']?>">
            </div>
            <div class="form-group">
                <input type="number" name="precio" placeholder="Precio" step="0.01" class="form-control" value="<?php echo $row['precio']?>">
            </div>
            <div class="form-group">
                <input type="text" name="categoria" placeholder="Categoria" class="form-control" value="<?php echo $row['categoria']?>" >
            </div>
            <div class="form-group">
                <input type="submit" name="guardar" value="Editar" class="btn btn-info">
            </div>
        </form>
        <!--<a href="guardar.php?producto=cocacola">Enviar</a>-->
    </div>

    
</body>
</html>