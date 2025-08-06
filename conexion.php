<?php
$host = "switchyard.proxy.rlwy.net";
$port = 24810;
$user = "root";
$password = "UVqCsOESrLbnTVtcIcapeuyEqcwwrMeW";  // pon aquí tu contraseña real de Railway
$database = "railway";

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
