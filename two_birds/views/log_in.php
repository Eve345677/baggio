<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container-xxl bg-primary hero-header mb-5" style="padding-bottom:40px;">
        <div class="container py-5 px-lg-5" style="padding-top:0;background-image: url('img/fondo_login.png'); background-size:100%; ">
            <div class="row g-5">
                <div class="col-lg-12 pt-5 text-center text-lg-start">
                    <h1 class="display-4 text-white mb-4 animated slideInLeft" style="width:60%; margin-left:20%;">Bienvenido a la seccion de login</h1>
                    <div class="formulario_user">
                        <form method="post">
<<<<<<< HEAD
                            <h2 style="width:60%; margin-left:20%;">Iniciar sesión</h2>
                            <br>
                            <?php if (isset($_GET['error'])) { ?>
                                <div class="bg-light" style="width:60%; margin-left:20%; color:red; background-color:red;">
=======
                            <h2>Iniciar sesión</h2>
                            <br>
                            <?php if (isset($_GET['error'])) { ?>
                                <div class="bg-light" style="width:350px; padding-top:15px; padding-bottom:1px; text-align:center;">
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
                                    <p>Contraseña o nombre de usuario incorrecto</p>
                                </div>
                                <br>
                            <?php } ?>
<<<<<<< HEAD
                            <div class="form-element" style="width:60%; margin-left:20%;">
                                <label style="font-family: 'Montserrat', sans-serif;">Nombre de usuario o correo:</label>
                                <div class="input-group flex-nowrap">
                                    <input type="text" class="form-control" placeholder="username" name="username" aria-label="username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <br>
                            <div class="form-element" style="width:60%; margin-left:20%;">
                                <label style="font-family: 'Montserrat', sans-serif;">Contraseña: </label>
                                <div class="input-group flex-nowrap">
                                    <input type="password" class="form-control" placeholder="password" name="password" aria-label="password" aria-describedby="addon-wrapping">
                                </div>
                                <br>
                                <br>
                                <input type="submit" name="insert" value="Iniciar sesión" class="btn btn-success" style="font-family: 'Montserrat', sans-serif;">
=======
                            <div class="form-element">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label mt-4" style="font-family: 'Montserrat', sans-serif;">Nombre de usuario o correo:</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" style="font-family: 'Montserrat', sans-serif;">
                                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                </div>
                            </div>
                            <br>
                            <div class="form-element">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label mt-4" style="font-family: 'Montserrat', sans-serif;">Contraseña:</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" style="font-family: 'Montserrat', sans-serif;">
                                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                                </div>
                            </div>
                            <br>
                            <br>
                            <input type="submit" name="insert" value="Iniciar sesión" class="btn btn-success" style="font-family: 'Montserrat', sans-serif;">
>>>>>>> e729f3e6841fbf2947e0c80af22ce8e118e8ec8c
                        </form>
                        <br><br>
                        <p>¿No tiene cuenta? <a href="register.php" style="color:green; border-bottom: 0.5px solid darkgreen;">Registrese</a></p>
                    </div>
                    <?php // if (isset($_GET['error'])) { 
                    ?>
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
                    <?php // } 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>