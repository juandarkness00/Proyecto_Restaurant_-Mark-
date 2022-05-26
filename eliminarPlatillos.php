<?php 
    if(!isset($_GET['id'])){
        header('Location: platillos.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM platillos where id = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: platillos.php?mensaje=eliminado');
    } else {
        header('Location: platillos.php?mensaje=error');
    }
    
?>