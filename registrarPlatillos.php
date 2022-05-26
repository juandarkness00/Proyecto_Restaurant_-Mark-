<?php
// Registrar Platillos

if(empty($_POST["oculto1"]) || empty($_POST["txtPlatillos"]) || empty($_POST["txtPrecioPlat"])){
    header('Location: platillos.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
$nombre = $_POST['txtPlatillos'];
$precio = $_POST['txtPrecioPlat'];

$sentencia = $bd->prepare("INSERT INTO platillos(nombre,precio) VALUES (?,?);");
$resultado = $sentencia->execute([$nombre,$precio]);

if($resultado === TRUE)
{
    header('Location: platillos.php?mensaje=registrado');
}
else
{
    header('Location: platillos.php?mensaje=error');
    exit();
}


?>