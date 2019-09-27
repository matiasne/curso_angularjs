<?php 
    include 'conexion.php';
    
    $sel = $con->query("SELECT id,producto,cantidad,precio,categoria FROM inventario");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <nav class="navbar navbar-light bg-warning">
        <a href="#" class="navbar-brand">CRUD</a>
    </nav>

    <div class="container" style="padding-top: 30px">
        <form action="guardar.php" method="POST">
            <div class="form-group">
                <input type="text" name="producto" placeholder="Producto" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" name="cantidad" placeholder="Cantidad" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" name="precio" placeholder="Precio" step="0.01" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="categoria" placeholder="Categoria" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="guardar" value="Guardar" class="btn btn-info">
            </div>
        </form>
        <!--<a href="guardar.php?producto=cocacola">Enviar</a>-->
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                <?php 
                    while($row = $sel->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['producto'] ?></td>
                    <td><?php echo $row['cantidad'] ?></td>
                    <td><?php echo "$". number_format($row['precio'],2) ?></td>
                    <td><?php echo $row['categoria'] ?></td>
                    <td><a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-warning">Editar</a></td>
                    <td><a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">Borrar</a></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>


        </table>

    </div>
</body>
</html>