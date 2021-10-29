<?php

include 'config.php';
include 'conexion.php';
include 'persona.php';
$correo=$_GET['correo'];
$sentencia=$pdo->prepare("SELECT * FROM alumnos where correo=?");
$sentencia->bindParam(1,$correo);
$sentencia->execute();
$alumnos=$sentencia->fetch(PDO::FETCH_ASSOC);
