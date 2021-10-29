<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';
$stmt = $pdo->prepare("UPDATE alumnos SET nombre=?, apellido=?, edad=? WHERE correo=?");
// Bind
$nombre = "Peter";
$apellido = "Grifin";
$edad = 19;
$id=2;
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $apellido);
$stmt->bindParam(3, $edad);
$stmt->bindParam(4, $id);
// Excecute
$stmt->execute();
$alumnos=new Alumno(2,"pepito", "paloncio", 36);
$stmt = $pdo->prepare("UPDATE alumnos SET nombre=:nombre, apellido=:apellido, edad=:edad WHERE correo=:correo" );
if($stmt->execute((array) $alumnos)){
    echo 'bien';
}else{ echo 'mal';}