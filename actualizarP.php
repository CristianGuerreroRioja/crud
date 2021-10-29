
<?php 
include_once 'cabecera.html';
include_once 'actualizar.php';

?>
<center><h1>Modificar Alumno</h1></center>
<br>
<div class="form-group align-items-center">
    <form action="modificarController.php" method="POST">
        
        
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $persona['nombre'] ?>" required>

        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $persona['apellido'] ?>" required>
        
        <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $persona['edad'] ?>" required>
    <br>
        <input type="submit" class="btn btn-success" name="Enviar" value="Submit">
    </form>
</div>