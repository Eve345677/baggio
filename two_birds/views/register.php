<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->

    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 pt-5 text-center text-lg-start">
                    <h1 class="display-4 text-white mb-4 animated slideInLeft">Registrarse </h1>
                    <div class="formulario_user">
                        <form method="post" action="register.php">
                            <div class="form-element">
                                <label style="font-family: 'Montserrat', sans-serif;
">Usuario:</label>
                                <input type="text" name="username">
                            </div>
                            <br>
                            <div class="form-element">
                                <label style="font-family: 'Montserrat', sans-serif;
">Correo electrónico:</label>
                                <input type="email" name="email">
                            </div>
                            <br>
                            <div class="form-element">
                                <label style="font-family: 'Montserrat', sans-serif;
">Contraseña:</label>
                                <input type="password" name="password">
                            </div>
                            <br>
                            <br>
                            <input type="submit" name="insert" value="Registrarse" class="btn btn-success" style="font-family: 'Montserrat', sans-serif;
">
                        </form>
                        <br>
                        <p>¿Ya tienes una cuenta? <a href="log_in.php" style="color:green; border-bottom: 0.5px solid darkgreen;">Inicie sesión</a></p>
                    </div>
                    <?php if ($exito == true) { ?>
                        <div class="alert alert-success" role="alert" style="background-color:lightgreen ;">
                            Cuenta registrada con éxito! <a href="log_in.php">iniciar sesión</a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>