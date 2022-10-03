<?php
require_once "includes/config.php";

if (isset($_POST['submit'])) {
  $usna = $_POST['usu'];
  $email = $_POST['correo'];
  $pass =$_POST['contra'];
  $conf = $_POST['confi'];
}
if (isset($_POST['usu'])) {
  if ($pass == $conf) {
    $consulta = "SELECT * FROM register WHERE correo='$email'";
    $res = mysqli_query($conn, $consulta);
    if (!$res) {
      die('Error de Consulta: ' . mysqli_errno($conn));
  }
    if (!$res->num_rows > 0) {

      $consulta = "INSERT INTO register VALUES(null, '" . $_POST['usu'] . "', '" . md5($_POST['contra']) . "', '" . $_POST['correo'] . "')";
      $res = mysqli_query($conn, $consulta);
      if (!$res) {
        die('Error de Consulta: ' . mysqli_errno($conn));
    }
    } else {
?>
      <script>
        alert("el correo no existe")
      </script>
    <?php
    }
  } else {
    ?>
    <h3>Las contraseñas no coinciden.</h3>
<?php
  }
  header("Location: index.php");
}



require_once "vistas/Register.php";
?>
