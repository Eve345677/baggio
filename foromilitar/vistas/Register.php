<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/register.css">
  <title>Registrarse</title>

</head>

<body>

  <div class="login-box">
    <a href="index.php"><img src="img/LogoGlobal.png" class="avatar" alt="Avatar Image"></a>
    <h1>Registrarse</h1>
    <form action="Register.php" method="POST">

      <!-- USUAARIO INPUT -->
      <label for="username">Crear Nombre</label>
      <input type="text" placeholder="Usuario" name="usu" required>

      <!-- CORREO ELECTRONICO INPUT-->
      <label for="username">Correo Electronico</label>
      <input type="text" placeholder="Usuario" name="correo" required>

      <!-- CONTRASEÑA INPUT -->
      <label for="password">Crear Contraseña</label>
      <input type="password" placeholder="Contraseña" name="contra" required>

      <label for="password">Confirmar Contraseña</label>
      <input type="password" placeholder="Contraseña" name="confi" required>
 
      <input type="submit" value="Registrarse" name="submit">

      <a href=""></a><br>
      <a href="login.php">Ya tienes una cuenta?</a><br>
      <a href="index.php">Volver al inicio</a>
      </form>
  </div>
</body>

</html>