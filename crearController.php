<?php
include 'config.php';
include 'conexion.php';
include_once 'persona.php';
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$alumnos=new Alumno(null,$nombre,$apellido,$edad);
$stmt = $pdo->prepare("INSERT INTO alumnos(correo, nombre, apellido, edad,) VALUES (:correo, :nombre, :apellido, :edad)" );
$stmt->execute((array) $alumnos);
header('Location: vista.php');
   