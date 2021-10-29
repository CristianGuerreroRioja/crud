<?php
include_once 'cabecera.html';
include 'ver.php';
echo "<h1>Administrar alumnos</h1>";
echo "<td><a type='button' class='btn btn-success'href='crear.php'>Crear</a></td>";
echo "<table class='table table-light'>";
echo "<tr>";
echo "<th>nombre</th>";
echo "<th>apellido</th>";
echo "<th>edad</th>";
echo "<th>Actualizar</th>";
echo "<th>Borrar</th>";
echo "</tr>";

foreach ($listaAlumnos as $alumnos) {

    echo "<tr>";
    echo "<td>{$alumnos['nombre']}</td>";
    echo "<td>{$alumnos['apellido']}</td>";
    echo "<td>{$alumnos['edad']}</td>";

    echo "<td><a type='button' class='btn btn-primary' href='actualizarController.php?correo={$alumnos['correo']}' onclick=\"return confirm('¿Estás seguro de actualizar?')\">Actualizar</a></td>";

    echo "<td><a type='button' class='btn btn-danger' href='borrar.php?correo={$alumnos['correo']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">borrar</a></td>";

    echo '</tr>';
}

echo "</table>";
echo "</html>";
