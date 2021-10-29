<?php include_once 'cabecera.html';
?>
<center><h1>Crear Alumno</h1></center>
<br>
<div class="form-group align-items-center">
    <form action="crearController.php" method="POST">
        
        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo: Pablito " required>

        <label for="Apellido">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ejemplo: Ramos " required>

        <label for="Edad">Edad</label>
        <input type="number" class="form-control" id="edad" name="edad" placeholder="Ejemplo: 20 " required>
    <br>
        <input type="submit" class="btn btn-success" name="Enviar" value="Submit">
    </form>
</div>