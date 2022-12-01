<?php
require_once "config.php";
session_start();
if (isset($_POST['nombre']) && isset($_POST['contra'])) {
    $sql = "SELECT * FROM usuarios WHERE usu_clave='" . $_POST['contra'] . "' AND usu_nombre='" . $_POST['nombre'] . "'";
    $query = mysqli_query($con, $sql);
    if (!$query) {
        die("Error de consulta: " . mysqli_errno($con));
    }
    if (mysqli_num_rows($query) == 1) {
        $_SESSION['usuario']['usu_nombre'] = $_POST['nombre'];
        header("Location: login.php?exito=si");
    } else {
        header("Location: login.php?exito=no");
    }
}
?>
<h1>Inicio Sesion</h1>
<form method="POST">
    <label>Ingrese Nombre de usuario</label>
    <input type="text" name="nombre" required>
    <br><br>
    <label>Ingrese Contraseña</label>
    <input type="text" name="contra" required>
    <br><br>
    <input type="submit" value="Enviar">
</form>
<br>
<?php if (isset($_GET['exito']) && $_GET['exito'] == "si") { ?>
<p>¡Se ha registrado con exito usuario
    <?php echo $_SESSION['usuario']['usu_nombre']; ?>!
</p>
<?php } else if (isset($_GET['exito']) && $_GET['exito'] == "no") { ?>
<p>La contraseña ó el nombre de usuario es incorecto</p>
<?php } ?>