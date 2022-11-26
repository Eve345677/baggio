<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>alta</title>
</head>

<body>
    <h3>Formulario de subida de Alumnos</h3>
    <div>
        <form action="alta.php" method="POST">
            <label>Nombre:  </label><input type="text" name="nombre"><br>
            <label>Apellido:</label><input type="text" name="apellido"><br>
            <label>Edad:    </label><input type="number" name="edad"><br>
            <label>Grado:           </label><input type="number" min="1" max="6" name="grado"><br>
            <label>Clave:           </label><input type="text" name="clave"><br>
            <input type="submit" value=grabar>
        </form><br>
        <a href="home.php">Volver</a>
    </div>
</body>

</html>