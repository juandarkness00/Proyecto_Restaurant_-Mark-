<?php

$usuario=$_POST['empleado'];
$contraseña=$_POST['cargo'];

session_start();
$_SESSION['empleado']=$usuario;

$conexion=mysqli_connect("localhost", "root", "", "crud");

$consulta="SELECT * FROM persona WHERE empleado = '$usuario' and cargo = '$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas)
{
    header("location:orden.php");
}
else
{
    ?>
    <?php
    include("home.html");
    ?>
    <h1 class="bad">Error</h1>
        <?php 
}
mysqli_free_result($resultado);
mysqli_close($conexion);