<?php

include 'conexion.php';

$fecha = filter_input(INPUT_POST, "Fecha");

$nombre = filter_input(INPUT_POST, "nombre");

$telefono = filter_input(INPUT_POST, "tel");



$query = "DELETE FROM alarma WHERE Nombre = '".$nombre."'";

$ejecutar = mysqli_query($conexion, $query);

$resultado = mysqli_fetch_array($ejecutar);

if($ejecutar){
	echo 1;
}

?>
