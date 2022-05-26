<?php 
$contrasena = "";
$usuario = "root";
$nombre_bd = "crud";

try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
// LOGIN [1]
$conexion=mysqli_connect("localhost", "root","","crud");
mysqli_set_charset($conexion, "utf8");

?>