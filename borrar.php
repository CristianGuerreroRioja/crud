<?php
include 'config.php';
include 'conexion.php';
include_once 'persona.php';
$correo=$_GET['correo'];
$stmt = $pdo->prepare("DELETE FROM alumnos WHERE correo=?");
$stmt->bindParam(1, $correo);
$stmt->execute();
header('Location: vista.php');