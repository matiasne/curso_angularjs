<?php 
header('Access-Control-Allow-Origin: *');

$con = new mysqli('localhost','id11073954_web','39323797','id11073954_web');

//$con = new mysqli('localhost','root','','webpack');

if($con->connect_errno){
    die("La conexion no pudo establecerse");
}

?>