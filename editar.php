<?php include 'template/header.php' ?>

<?php
    if(!isset($_GET['codigo']))
    {
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $codigo = $_GET['codigo'];

    $sentencia = $bd->prepare("SELECT * FROM persona WHERE codigo = ?;");
    $sentencia->execute([$codigo]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                    Editar Datos
            </div>
            <form class="p-4" method="POST" action="editarProceso.php">
            <div class="mb-3">
                <label  class="form-label">
                    Empleado:
                </label>
                <input type="text" class="form-control" name="txtEmpleado" required 
                 value="<?php echo $persona->empleado; ?>">
            </div>

            <div class="mb-3">
                <label  class="form-label">
                    Cargo:
                </label>
                <input type="text" class="form-control" name="txtCargo" autofocus required
                value="<?php echo $persona->cargo; ?>">
            </div>
            <div class="d-grid">
                <input type="hidden" name="codigo" value="<?php echo $persona->codigo; ?>">
                <input type="submit" class="btn btn-primary" value="Editar">


             </div>
           </form>
        </div>
    </div>
  </div>
</div>

<?php include 'template/footer.php' ?>
