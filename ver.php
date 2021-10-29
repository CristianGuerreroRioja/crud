<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';
$sentencia=$pdo->prepare("SELECT * FROM alumnos");
$sentencia->execute();
$listaAlumnos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaAlumnos);

