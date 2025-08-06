<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre_evento"];
    $fecha = $_POST["fecha"];
    $precio = $_POST["precio"];
    $comision = $_POST["comision"];

    $conn->query("INSERT INTO actuaciones (nombre_evento, fecha, precio, comision, estado)
                  VALUES ('$nombre', '$fecha', '$precio', '$comision', 'Venta')");

    echo "Actuación creada. <a href='index.php'>Volver</a>";
    exit;
}
?>

<h2>Crear Actuación</h2>
<form method="POST">
    Nombre del Evento: <input type="text" name="nombre_evento"><br>
    Fecha: <input type="date" name="fecha"><br>
    Precio (€): <input type="number" step="0.01" name="precio"><br>
    Comisión (%): <input type="number" step="0.01" name="comision"><br>
    <button type="submit">Crear</button>
</form>
