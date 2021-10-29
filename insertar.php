<?php 
include 'config.php';
include 'conexion.php';
include 'persona.php';
/*$stmt = $pdo->prepare("INSERT INTO alumnos (name, age) VALUES (?, ?)");
// Bind
$name = "Peter";
$age = 30;
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $age);
// Excecute
$stmt->execute();*/
////
$stmt = $pdo->prepare("INSERT INTO alumnos (nombre, apellido, edad) VALUES (:nombre, :apellido :edad)");
// Bind
$nombre = "Charles";
$edad = 25;
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':apellido', $apellido);
$stmt->bindParam(':edad', $edad);
// Excecute
$stmt->execute();

$stmt = $pdo->prepare("INSERT INTO alumnos (nombre, apellido, edad) VALUES (:nombre, :apellido, :edad)");
$nombre = "Luis";
$apellido = "Hernandez";
$edad = 35;
// Bind y execute: no funciona 
try{

if($stmt->execute(array(':nombre'=>$nombre, ':apellido'=>$apellido,  ':edad'=>$edad))){
    echo 'bien';
}else{ echo 'mal';}

}catch (PDOException $e) {
    echo 'mal';
   echo  $e->getMessage();
} 
/*$persona=new Persona("pepe",32);
$stmt = $pdo->prepare("INSERT INTO alumnos (nombre, age) VALUES (:nombre, :age)");
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}*/
$alumnos=new Alumno(null,"pepito","palotios",34);
$stmt = $pdo->prepare("INSERT INTO alumnos(correo, nombre, apellido, edad) VALUES (:correo, :nombre, apellido, :edad)" );
if($stmt->execute((array) $alumnos)){
    echo 'bien';
}else{ echo 'mal';}

