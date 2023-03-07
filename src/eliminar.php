<?php
    if (!isset($_GET['codigo'])){
        //echo 'error';
        header('Location: index.php?mensaje=error');
    }

    require_once __DIR__ . '../../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    include_once 'model/conexion.php';

    $codigo = $_GET['codigo'];

    $sentencia = $db->prepare("DELETE FROM personas WHERE codigo=?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado) {
        header('Location: index.php?mensaje=eliminado');
    } else {
        header('Location: index.php?mensaje=error');
    }
?>