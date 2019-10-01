<?php 
header('Access-Control-Allow-Origin: *');
$con = new mysqli('localhost','root','','webpack');

if($con->connect_errno){
    die("La conexion no pudo establecerse");
}

?>