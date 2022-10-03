<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 pt-5 text-center text-lg-start">
                    <h1 class="display-4 text-white mb-4 animated slideInLeft">Bienvenido a la seccion de login</h1>
                    <div class="formulario_user">
                        <form method="post">
                            <h2>Iniciar sesión</h2>
                            <br>
                            <?php if(isset($_GET['error'])){ ?>
                                <div class="bg-light" style="width:350px; padding-top:15px; padding-bottom:1px; text-align:center;">
                                <p>Contraseña o nombre de usuario incorrecto</p>
                            </div>
                            <br>
                            <?php } ?>
                            <div class="form-element">
                                <label style="font-family: 'Montserrat', sans-serif;
">Nombre de usuario o correo:</label>
                                <input type="text" name="username" />
                            </div>
                            <br>
                            <div class="form-element">
                                <label style="font-family: 'Montserrat', sans-serif;
">Contraseña:</label>
                                <input type="password" name="password">
                            </div>
                            <br>
                            <br>
                            <input type="submit" name="insert" value="Iniciar sesión" class="btn btn-success" style="font-family: 'Montserrat', sans-serif;
">
                        </form>
                        <br>
                        <p>¿No tiene cuenta? <a href="register.php" style="color:green; border-bottom: 0.5px solid darkgreen;">Registrese</a></p>
                    </div>
                    <?php // if (isset($_GET['error'])) { ?>
                        <!-- <div class="modal fade show" id="exampleModalLive" tabindex="-1" aria-labelledby="exampleModalLiveLabel" aria-modal="true" role="dialog" style="display: block; background-color:red;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLiveLabel">:(</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Contraseña o nombre de usuario invalido</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <?php // } ?>
                </div>
            </div>
        </div>
    </div>
</div>