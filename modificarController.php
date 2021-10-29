<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';
$stmt = $pdo->prepare("UPDATE alumnos SET nombre=?, apellido=?, edad=? WHERE correo=?");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo= $_POST['correo'];
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $apellido);
$stmt->bindParam(3, $edad);
$stmt->bindParam(4, $correo);
// Excecute
$stmt->execute();
header('Location: vista.php');