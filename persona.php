<?php 
class Alumno{
  public $correo;  
  public $nombre;
  public $apellido;
  public $edad;
 public function __construct($correo,$nombre,$apellido,$edad){
    $this->correo=$correo;
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->edad=$edad;
 }

}