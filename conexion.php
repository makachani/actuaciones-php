<?php
$host = getenv("DB_HOST");
$port = getenv("DB_PORT");
$usuario = getenv("DB_USER");
$password = getenv("DB_PASS");
$basededatos = getenv("DB_NAME");

$conn = new mysqli($host, $usuario, $password, $basededatos, $port);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
