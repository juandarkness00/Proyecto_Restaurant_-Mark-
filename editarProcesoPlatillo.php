<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: platillos.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['id'];
    $nombre = $_POST['txtPlatillos'];
    $precio = $_POST['txtPrecioPlat'];

    $sentencia = $bd->prepare("UPDATE platillos SET nombre = ?, precio = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $precio, $codigo]);

    if ($resultado === TRUE) {
        header('Location: platillos.php?mensaje=editado');
    } else {
        header('Location: platillos.php?mensaje=error');
        exit();
    }
    
?>