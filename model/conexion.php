<?php
include 'DevCoder.php';
use DevCoder\DotEnv;

(new DotEnv(__DIR__ . '/../.env'))->load();

$host = $_ENV['MI_HOST'];
$puerto = $_ENV['MI_PUERTO'];
$nombreDb = $_ENV['MI_BD'];
$usuario = $_ENV['MI_USUARIO'];
$pass = $_ENV['MI_PASS'];

// CONEXION LOCAL
// $host = "HOST";
// $puerto = "PORT";
// $nombreDb = "BD";
// $usuario = "USER";
// $pass = "PASS";

try {
    $db = new PDO("pgsql:host=$host;port=$puerto;dbname=$nombreDb;user=$usuario;password=$pass");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado correctamente";
} catch (Exception $e) {
    echo "Problema de conecion con la bd: " .$e->getMessage();
}
