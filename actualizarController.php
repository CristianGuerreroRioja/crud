<?php
include_once 'cabecera.html';
include_once 'actualizar.php';

?>
<center>
    <h1>Modificar Alumno</h1>
</center>
<br>
<div class="form-group align-items-center">
    <form action="modificarController.php" method="POST">


        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $alumnos['nombre'] ?>" required>
        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $alumnos['apellido'] ?>" required>
        <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $alumnos['edad'] ?>" required>
        <input type="hidden" class="form-control" id="correo" name="correo" value="<?php echo $alumnos['correo'] ?>" required>
        <br>
        <input type="submit" class="btn btn-success" name="Enviar" value="Submit">
    </form>
</div>