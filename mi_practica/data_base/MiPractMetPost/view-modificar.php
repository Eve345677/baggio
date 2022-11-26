<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
    </head>
    <body>
        <h3>Formulario de Modificacion de Alumnos</h3>
        <form action="modificar.php" method="POST">
            <label>Clave del alumno</label><input type="text" name="clave"><br><br><br>
            <h4>Campos a Modificar</h4>
            <label>Nombre:</label><input type="text" name="nombre"><br>
            <label>Apellido:</label><input type="text" name="apellido"><br>
            <label>Grado:</label><input type="number" min="1" max="6"name="grado"><br>
            <label>Edad:</label><input type="number" name="edad"><br>
            <input type="submit" value="modificar"><br>
        </form>
        <a href="home.php">Volver</a>
    </body>
</html>