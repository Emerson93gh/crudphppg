<?php
//print_r($_POST);
if (
    empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"])
    || empty($_POST["txtSigno"])
) {
    //echo "Faltan datos";
    header('Location: index.php?mensaje=falta');
    exit();
}

require_once __DIR__ . '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

include_once 'model/conexion.php';
$nombre = $_POST["txtNombre"];
$edad = $_POST["txtEdad"];
$signo = $_POST["txtSigno"];

$sentencia = $db->prepare("INSERT INTO personas(nombre,edad,signo) VALUES (?,?,?);");
$resultado = $sentencia->execute([$nombre, $edad, $signo]);

if ($resultado) {
    //echo 'OK';
    header('Location: index.php?mensaje=registrado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
