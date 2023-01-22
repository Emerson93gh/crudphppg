<?php
// $host = $_ENV['MI_HOST'];
// $puerto = $_ENV['MI_PUERTO'];
// $nombreDb = $_ENV['MI_BD'];
// $usuario = $_ENV['MI_USUARIO'];
// $pass = $_ENV['MI_PASS'];

// var_dump($host);
// var_dump($puerto);

// CONEXION LOCAL
$host = "host";
$puerto = "puerto";
$nombreDb = "db";
$usuario = "user";
$pass = "pass";

try {
    $db = new PDO("pgsql:host=$host;port=$puerto;dbname=$nombreDb;user=$usuario;password=$pass");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado correctamente";
} catch (Exception $e) {
    echo "Problema de conecion con la bd: " .$e->getMessage();
}
