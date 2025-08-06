<?php
$host = "switchyard.proxy.rlwy.net";
$port = 24810;
$usuario = "root";
$password = "UVqCsOESrLbnTVtcICapeuyEqcwwrMEw";  // tu contraseña real
$basededatos = "railway";

$conn = new mysqli($host, $usuario, $password, $basededatos, $port);

// Verifica conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
