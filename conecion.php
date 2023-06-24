<?php
    // Conectar a la base de datos
$conexion = mysqli_connect("mysql", "toro", "toro1234", "formulario");

// Verificar la conexión
if (!$conexion) {
	die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

?>