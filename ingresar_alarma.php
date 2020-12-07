<?php

include 'conexion.php';

$fecha = $_POST["Fecha"];

$nombre = $_POST["nombre"];

$telefono = $_POST["tel"];


$query = "INSERT INTO alarma VALUES ('".$nombre."','".$fecha."','".$telefono."',NULL)";

$ejecutar = mysqli_query($conexion, $query);

$resultado = mysqli_fetch_array($ejecutar);

if($ejecutar){
	echo 1;	
}
else{
echo 2;
}

?>
