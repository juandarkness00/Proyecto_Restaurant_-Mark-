<?php 
    if(!isset($_GET['id'])){
        header('Location: postres.php?mensaje=error');
        exit();
    }

    include 'model/conexion.php';
    $codigo = $_GET['id'];

    $sentencia = $bd->prepare("DELETE FROM postres where id = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: postres.php?mensaje=eliminado');
    } else {
        header('Location: postres.php?mensaje=error');
    }
    
?>