<?php include 'template/header.php' ?>
<?php
    if (!isset($_GET['codigo'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    require_once __DIR__ . '../../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    include_once 'model/conexion.php';
    
    $codigo = $_GET['codigo'];

    $sentencia = $db->prepare("SELECT * FROM personas WHERE codigo = ?;");
    $sentencia->execute([$codigo]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form action="editarProceso.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required value="<?php echo $persona->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtEdad" class="form-label">Edad: </label>
                        <input type="text" class="form-control" name="txtEdad" required value="<?php echo $persona->edad; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtSigno" class="form-label">Signo: </label>
                        <input type="text" class="form-control" name="txtSigno" required value="<?php echo $persona->signo; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $persona->codigo; ?>">
                        <input type="submit" class="btn btn-primary" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'template/footer.php' ?>