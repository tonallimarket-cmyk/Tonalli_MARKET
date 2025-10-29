<?php
$conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
