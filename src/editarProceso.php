<?php
    //print_r($_POST);
    if (!isset($_POST['codigo'])){
        header('Location: index.php?mensaje=error');
    }

    // require_once __DIR__ . '../../vendor/autoload.php';

    // $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    // $dotenv->load();

    include_once 'model/conexion.php';

    $codigo = $_POST['codigo'];
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    $signo = $_POST['txtSigno'];

    $sentencia = $db->prepare("UPDATE personas SET nombre = ?, edad = ?, signo = ? WHERE codigo =?;");
    $resultado = $sentencia->execute([$nombre, $edad, $signo, $codigo]);

    if ($resultado) {
        //echo 'Ok';
        header('Location: index.php?mensaje=editado');
    } else {
        //echo 'Error';
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>