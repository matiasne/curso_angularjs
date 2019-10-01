<?php   @session_start();

$con = new mysqli('localhost','id11073450_cdnvue','39323797','id11073450_cdnvue');

//$con = new mysqli('localhost','root','','snippets');

if($con->connect_errno){
    die("La conexion no pudo establecerse");
}

?>