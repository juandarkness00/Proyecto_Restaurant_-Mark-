<?php

$usuario=$_POST['nombre'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['nombre']=$usuario;

$conexion=mysqli_connect("localhost", "root", "", "crud");

$consulta="SELECT * FROM administrador WHERE nombre = '$usuario' and contraseña = '$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas)
{
    header("location:index.php");
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