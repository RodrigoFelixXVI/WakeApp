<?php

include 'conexion.php';

$query = "SELECT * FROM alarma WHERE id != 0";

$ejecutar = mysqli_query($conexion, $query);

$datos = array();

foreach ($ejecutar as $cadena){
$datos[] = $cadena;
} 

echo json_encode($datos);

?>
