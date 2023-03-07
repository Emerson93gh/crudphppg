<?php
// CONEXION A SERVER
$host = $_ENV['PGHOST'];
$puerto = $_ENV['PGPORT'];
$nombreDb = $_ENV['PGDATABASE'];
$usuario = $_ENV['PGUSER'];
$pass = $_ENV['PGPASSWORD'];

// CONEXION LOCAL
// $host = "MY_HOST";
// $puerto = 0123;
// $nombreDb = "MY_DB";
// $usuario = "MY_USER";
// $pass = "MY_PASS";

try {
    $db = new PDO("pgsql:host=$host;port=$puerto;dbname=$nombreDb;user=$usuario;password=$pass");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado correctamente";
} catch (Exception $e) {
    echo "Problema de conecion con la bd: " .$e->getMessage();
}
