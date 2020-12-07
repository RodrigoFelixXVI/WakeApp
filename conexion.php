<?php
$host = "us-cdbr-east-02.cleardb.com";
$usuario = "b9a1666b8ae3b3";
$contra = "007eba1d";
$db = "heroku_79e42d8ee832be6";

$conexion = new mysqli($host, $usuario, $contra, $db);
if($conexion->connect_error){
	die("Error de conexion");
} 

?>
