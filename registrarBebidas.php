<?php
// Registrar Bebidas

if(empty($_POST["oculto2"]) || empty($_POST["txtBebidas"]) || empty($_POST["txtPrecioBeb"])){
    header('Location: bebidas.php?mensaje=falta');
    exit();
}

include_once 'model/conexion.php';
$nombre = $_POST['txtBebidas'];
$precio = $_POST['txtPrecioBeb'];

$sentencia = $bd->prepare("INSERT INTO bebidas(nombre,precio) VALUES (?,?);");
$resultado = $sentencia->execute([$nombre,$precio]);

if($resultado === TRUE)
{
    header('Location: bebidas.php?mensaje=registrado');
}
else
{
    header('Location: bebidas.php?mensaje=error');
    exit();
}


?>