<?php
$host = "10.12.220.170"; // o IP del servidor si está en línea
$usuario = "ubuntu";   // cambia si usas otro usuario
$contrasena = "admin";    // pon tu contraseña
$base_datos = "supermercado_bd";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion = new mysqli("localhost", "usuario", "contraseña", "basededatos");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
    $conexion = mysqli_connect("localhost", "root", "", "nombre_de_tu_base");

}
?>


