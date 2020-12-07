<?php

include 'conexion.php';

$query = "SELECT * FROM alarma WHERE id >= 0";

$ejecutar = mysqli_query($conexion, $query);

$resultado = mysqli_fetch_assoc($ejecutar);

$datos = array();

foreach ($resultado as $cadena){
$datos[] = $cadena;
} 

echo json_encode($datos);

?>