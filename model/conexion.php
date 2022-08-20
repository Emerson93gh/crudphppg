<?php
// include 'DevCoder.php';
// use DevCoder\DotEnv;

// (new DotEnv(__DIR__ . '/../.env'))->load();

// $host = $_ENV['MI_HOST'];
// $puerto = $_ENV['MI_PUERTO'];
// $nombreDb = $_ENV['MI_BD'];
// $usuario = $_ENV['MI_USUARIO'];
// $pass = $_ENV['MI_PASS'];

// var_dump($host);
// var_dump($puerto);

// CONEXION LOCAL
$host = "ec2-52-72-99-110.compute-1.amazonaws.com";
$puerto = 5432;
$nombreDb = "d8sljqm9iouoj4";
$usuario = "ypbbhgmyswznyp";
$pass = "aa74ce546783a391b4be91d7edf7a1c17bdcd436fbaedede5abeabb9b2a44602";

try {
    $db = new PDO("pgsql:host=$host;port=$puerto;dbname=$nombreDb;user=$usuario;password=$pass");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado correctamente";
} catch (Exception $e) {
    echo "Problema de conecion con la bd: " .$e->getMessage();
}
