<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtEmpleado"]) || empty($_POST["txtCargo"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $empleado = $_POST['txtEmpleado'];
    $cargo = $_POST['txtCargo'];

    $sentencia = $bd->prepare("INSERT INTO persona(empleado,cargo) VALUES (?,?);");
    $resultado = $sentencia->execute([$empleado,$cargo]);

    if($resultado === TRUE)
    {
        header('Location: index.php?mensaje=registrado');
    }
    else
    {
        header('Location: index.php?mensaje=error');
        exit();
    }  

?>

