<?php
    print_r($_POST);
    if(!isset($_POST['codigo']))
    {
        header('Location: index.php?mensaje=error');
    }

    include 'model/conexion.php';
    $codigo = $_POST['codigo'];
    $empleado = $_POST['txtEmpleado'];
    $cargo = $_POST['txtCargo'];

    $sentencia = $bd->prepare("UPDATE persona SET empleado = ?, cargo = ? WHERE codigo = ?;");
    $resultado = $sentencia->execute([$empleado, $cargo, $codigo]);

    if ($resultado === TRUE) 
    {
        //header('Location: index.php?mensaje=editado');
        echo "Ok";
    } else 
    {
        //header('Location: index.php?mensaje=error');
        echo "Error";
        //exit();
    }
    
    

?>