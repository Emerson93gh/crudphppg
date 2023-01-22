<?php
// $host = $_ENV['MI_HOST'];
// $puerto = $_ENV['MI_PUERTO'];
// $nombreDb = $_ENV['MI_BD'];
// $usuario = $_ENV['MI_USUARIO'];
// $pass = $_ENV['MI_PASS'];

// var_dump($host);
// var_dump($puerto);

// CONEXION LOCAL
$host = "containers-us-west-107.railway.app";
$puerto = 5749;
$nombreDb = "railway";
$usuario = "postgres";
$pass = "Ys8omBz2va5wpQyinj3R";

try {
    $db = new PDO("pgsql:host=$host;port=$puerto;dbname=$nombreDb;user=$usuario;password=$pass");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado correctamente";
} catch (Exception $e) {
    echo "Problema de conecion con la bd: " .$e->getMessage();
}
