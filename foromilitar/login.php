<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/stylos.css">
   <title>Iniciar Sesion</title>
  </head>
  <body>
    <div class="login-box">
      <a href="index.php"><img  src="img/LogoGlobal.png" class="avatar" alt="Avatar Image"></a>
      <h1>Iniciar Sesion</h1>
      <form action="validar.php" method="POST">
        <!-- USUAARIO INPUT -->
        <label for="username">Usuario</label>
        <input type="text" placeholder="Usuario" name="usu">
        <!-- CONTRASEÑA INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="contra">
        <input type="submit" value="Iniciar Sesion">
        <a href="contraseña.php">Olvidaste tu contraseña?</a><br>
        <a href="Register.php">No tienes una cuenta?</a><br>
        <a href="index.php">Volver al inicio</a>
      </form>
    </div>
  </body>
</html>