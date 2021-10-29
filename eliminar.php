<?php 
include 'config.php';
include 'conexion.php';
include 'persona.php';
echo $pdo->exec("DELETE FROM alumnos WHERE correo=1");
$stmt = $pdo->prepare("DELETE FROM alumnos WHERE correo=?");
// Bind
$correo = 5;

$stmt->bindParam(1, $correo);
$stmt->execute();