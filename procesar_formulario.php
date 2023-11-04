<?php

$conexion = new mysqli("localhost", "root", "", "formulariojava");

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$identificacion = $_POST['identificacion'];
$genero = $_POST['genero'];

$insert_query = "INSERT INTO usuarios (nombre, identificacion, genero) VALUES ('$nombre', '$identificacion', '$genero')";

if ($conexion->query($insert_query) === TRUE) {
    header("Location: realizado.html");
    exit;
} else {
    die("Location: error.html " . $conexion->connect_error);
}

$conexion->close();
?>
