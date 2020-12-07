<? php
$host = "localhost";
$usuario = "root";
$contra = "";
$db = "wakeappcrud";

$conexion = new mysqli($host, $usuario, $contra, $db);
if($conexion->connect_error){
	die("Error de conexion");
} 

?>
