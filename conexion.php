<?php

$conexion = new mysqli("localhost", "root", "", "sistem_fares02");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

?>