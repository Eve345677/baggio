<?php
require_once "includes/config.php";
$usuario = $_POST['usu'];
$contraseña = md5($_POST['contra']);

$consul = "SELECT*FROM register WHERE nombre='$usuario' and contraseña='$contraseña'";
$resul = mysqli_query($conn, $consul);
if (!$resul) {
    echo "Fallo consulta: " . mysqli_error($conn);
    exit();
}
$filas = mysqli_num_rows($resul);

if ($filas == 1) {
    session_start();
    $_SESSION['usu'] = mysqli_fetch_assoc($resul);
    header("location:index.php");
} else {
?>
    <?php
    include("login.php");
    ?>
    <h2>El nombre de usuario o contraseña es incorrecta.</h2>
<?php
}
mysqli_free_result($resul);
mysqli_close($conn);
require_once "login.php";