<link rel="stylesheet" href="./css/bootstrap.min.css">
<div class="card"></div>
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
            <div class="row g-9">

                <div class="col-lg-6 pt-5 text-center text-lg-start">
                    <img href="./22-4.12-proyectos/two_birds/img/putoelquelolea.png">
                    <h1 class="display-4 text-white mb-4 animated slideInLeft"> Registrarse </h1>
                    <div class="formulario_user">
                        <form method="post" action="register.php">
                            <div class="form-element">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label mt-4" style="font-family: 'Montserrat', sans-serif;">Usuario:</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" style="font-family: 'Montserrat', sans-serif;">
                                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                </div>
                            </div>
                            <br>
                            <div class="form-element">
                                <div class="form-element">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label mt-4" style="font-family: 'Montserrat', sans-serif;">Correo electrónico:</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="font-family: 'Montserrat', sans-serif;">
                                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-element">
                                <div class="form-element">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-label mt-4" style="font-family: 'Montserrat', sans-serif;">Contraseña:</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ***********" style="font-family: 'Montserrat', sans-serif;">
                                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <input type="submit" name="insert" value="Registrarse" class="btn btn-success" style="font-family: 'Montserrat', sans-serif;">
                        </form>
                        <br>
                        <p>¿Ya tienes una cuenta? <a href="log_in.php" style="color:green; border-bottom: 0.5px solid darkgreen;">Inicie sesión</a></p>
                    </div>
                    <?php if ($exito == true) { ?>
                        <div class="alert alert-success" role="alert" style="background-color:lightgreen ;">
                            Cuenta registrada con éxito! <a href="log_in.php">iniciar sesión</a>
                        </div>
                    <?php } else if(isset($_GET['error'])){ ?>
                        <div class="alert alert-light" role="alert" style="background-color:red ; color:white;">
                            La cuenta ya existe
                        </div>
                        <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div>