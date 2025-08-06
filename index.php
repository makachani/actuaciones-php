<?php
include 'conexion.php';

$resultado = $conn->query("SELECT * FROM actuaciones");

echo "<h2>Lista de Actuaciones</h2>";
echo "<a href='crear_actuacion.php'>Crear nueva actuación</a><br><br>";

while ($row = $resultado->fetch_assoc()) {
    echo "🎤 " . $row["nombre_evento"] . " - " . $row["fecha"] . "<br>";
}
?>
