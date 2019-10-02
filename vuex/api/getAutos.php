<?php 
include 'conexion.php';

$marca = $con->real_escape_string(htmlentities($_GET['marca']));
$anio = $con->real_escape_string(htmlentities($_GET['anio']));

$temporal = array();
$resultado = array();

$sel = $con->query("SELECT * FROM automoviles WHERE marca LIKE '%$marca%' AND anio_modelo = '$anio'");

while ($f = $sel->fetch_assoc()) {
    $temporal = $f;
    array_push($resultado, $temporal);
}

echo json_encode($resultado);

$sel->close();
$con->close();

?>