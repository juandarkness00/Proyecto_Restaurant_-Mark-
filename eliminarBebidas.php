<?php 
    if(!isset($_GET['id'])){
        header('Location: bebidas.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM bebidas WHERE id = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: bebidas.php?mensaje=eliminado');
    } else {
        header('Location: bebidas.php?mensaje=error');
    }
    
?>