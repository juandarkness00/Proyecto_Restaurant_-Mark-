<?php
// Registrar Postres

if(empty($_POST["oculto3"]) || empty($_POST["txtPostres"]) || empty($_POST["txtPrecioPost"])){
    header('Location: postres.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
$nombre = $_POST['txtPostres'];
$precio = $_POST['txtPrecioPost'];

$sentencia = $bd->prepare("INSERT INTO postres(nombre,precio) VALUES (?,?);");
$resultado = $sentencia->execute([$nombre,$precio]);

if($resultado === TRUE)
{
    header('Location: postres.php?mensaje=registrado');
}
else
{
    header('Location: postres.php?mensaje=error');
    exit();
}


?>