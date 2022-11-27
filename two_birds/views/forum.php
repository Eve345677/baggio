<div class="container">
    <br>
    <br>
    <div class="row" id="cont">
        <h1 style="font-size:60px; margin-bottom:20px;">Foro</h1>
        <!-- Blog entries-->
        <?php if (!isset($_GET['busqueda']) && !isset($_GET['categoria'])) { ?>
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="img/portadas/<?php echo $resultado[0]['portada']; ?>" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted"><?php echo $resultado[0]["mes"] . " " . $resultado[0]["dia"] . ", " . $resultado[0]["Year"] ?></div>
                        <div>
                            <?php
                            if (isset($resultado[0]["tags"])) {
                                foreach ($resultado[0]["tags"] as $tag) { ?>
                                    <span class="badge bg-success" style="background-color: rgb(126, 255, 18); margin-bottom: 50px; margin-left: 10px;"><?php echo $tag; ?></span>
                            <?php }
                            } ?>
                        </div>
                        <h2 class="card-title"><?php echo $resultado[0]['titulo']; ?></h2>
                        <p class="card-text" style="color:grey;"><?php echo $resultado[0]['encabezado'] . "..."; ?></p>
                        <a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado[0]['id']; ?>">Read more →</a>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado[1]['portada']; ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?php echo $resultado[1]["mes"] . " " . $resultado[1]["dia"] . ", " . $resultado[1]["Year"] ?></div>
                                <div>
                                    <?php
                                    if (isset($resultado[1]["tags"])) {
                                        foreach ($resultado[1]["tags"] as $tag) { ?>
                                            <span class="badge bg-success" style="background-color: rgb(126, 255, 18); margin-bottom: 50px; margin-left: 10px;"><?php echo $tag; ?></span>
                                    <?php }
                                    } ?>
                                </div>
                                <h2 class="card-title h4"><?php echo $resultado[1]['titulo']; ?></h2>
                                <p class="card-text" style="color:grey;"><?php echo $resultado[1]['encabezado'] . "..."; ?></p>
                                <a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado[1]['id']; ?>">Read more →</a>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado[2]['portada']; ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?php echo $resultado[2]["mes"] . " " . $resultado[2]["dia"] . ", " . $resultado[2]["Year"] ?></div>
                                <div>
                                    <?php
                                    if (isset($resultado[2]["tags"])) {
                                        foreach ($resultado[2]["tags"] as $tag) { ?>
                                            <span class="badge bg-success" style="background-color: rgb(126, 255, 18); margin-bottom: 50px; margin-left: 10px;"><?php echo $tag; ?></span>
                                    <?php }
                                    } ?>
                                </div>
                                <h2 class="card-title h4"><?php echo $resultado[2]['titulo']; ?></h2>
                                <p class="card-text" style="color:grey;"><?php echo $resultado[2]['encabezado'] . "..."; ?></p>
                                <a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado[2]['id']; ?>">Read more →</a>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado[3]['portada']; ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?php echo $resultado[3]["mes"] . " " . $resultado[3]["dia"] . ", " . $resultado[3]["Year"] ?></div>
                                <div>
                                    <?php
                                    if (isset($resultado[3]["tags"])) {
                                        foreach ($resultado[3]["tags"] as $tag) { ?>
                                            <span class="badge bg-success" style="background-color: rgb(126, 255, 18); margin-bottom: 50px; margin-left: 10px;"><?php echo $tag; ?></span>
                                    <?php }
                                    } ?>
                                </div>
                                <h2 class="card-title h4"><?php echo $resultado[3]['titulo']; ?></h2>
                                <p class="card-text" style="color:grey;"><?php echo $resultado[3]['encabezado'] . "..."; ?></p>
                                <a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado[3]['id']; ?>">Read more →</a>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado[4]['portada']; ?>" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?php echo $resultado[4]["mes"] . " " . $resultado[4]["dia"] . ", " . $resultado[4]["Year"] ?></div>
                                <div>
                                    <?php
                                    if (isset($resultado[4]["tags"])) {
                                        foreach ($resultado[4]["tags"] as $tag) { ?>
                                            <span class="badge bg-success" style="background-color: rgb(126, 255, 18); margin-bottom: 50px; margin-left: 10px;"><?php echo $tag; ?></span>
                                    <?php }
                                    } ?>
                                </div>
                                <h2 class="card-title h4"><?php echo $resultado[4]['titulo']; ?></h2>
                                <p class="card-text" style="color:grey;"><?php echo $resultado[4]['encabezado'] . "..."; ?></p>
                                <a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado[4]['id']; ?>">Read more →</a>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        if (isset($_GET['busqueda']) || isset($_GET['categoria'])) { ?>
                <div class="col-lg-8">
                    <?php if (isset($_GET['busqueda'])) { ?>
                        <h1>Resultados de la busqueda "<?php echo $_GET['busqueda']; ?>"</h1>
                    <?php } else { ?>
                        <h1>Categoria <?php echo $_GET['categoria']; ?></h1>
                    <?php }
                    if (isset($_GET['busqueda']) && count($usuarios) > 0) { ?>
                        <br>
                        <h2>Usuarios</h2>
                        <?php if (count($usuarios) >= 4) { ?>
                            <div class="row">
                                <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="container px-lg-5">
                                        <div class="owl-carousel testimonial-carousel">
                                            <?php foreach ($usuarios as $us) { ?>
                                                <div class="testimonial-item position-relative bg-light border-5 border-primary rounded p-4 my-4">
                                                    <img class="rounded-circle" src="img/<?php echo $us['foto']; ?>" alt="" style="object-fit:cover; border:solid 5px #7EBC12; border-radius:20%; width:100%; height:80%;">
                                                    <h3 style="text-align:center; margin-top:10px;"><?php echo $us['user_name']; ?></h3>
                                                    <a href="my_profile.php?id=<?php echo $us['id']; ?>"><button style="margin-left:20%; width:60%;" type="button" class="btn btn-success">
                                                            Ver perfil
                                                        </button></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="row">
                                <?php foreach ($usuarios as $us) { ?>
                                    <div class="col-4">
                                        <div class="testimonial-item position-relative bg-light border-5 border-primary rounded p-4 my-4">
                                            <img class="rounded-circle" src="img/<?php echo $us['foto']; ?>" alt="" style="object-fit:cover; border:solid 5px #7EBC12; border-radius:20%; width:100%; height:80%;">
                                            <h3 style="text-align:center; margin-top:10px;"><?php echo $us['user_name']; ?></h3>
                                            <a href="my_profile.php?id=<?php echo $us['id']; ?>"><button style="margin-left:20%; width:60%;" type="button" class="btn btn-primary">
                                                    Ver perfil
                                                </button></a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                    <?php }
                    } ?>
                    <br>
                    <h2>Informes</h2>
                    <?php
                    for ($i = $pag; $i < count($resultado); $i += 2) {
                    ?><div class="row">
                            <?php if (isset($resultado[$i])) { ?>
                                <div class="col-lg-6">
                                    <div class="card mb-4">
                                        <a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado[$i]['portada']; ?>" alt="..." /></a>
                                        <div class="card-body">
                                            <div class="small text-muted"><?php echo $resultado[$i]["mes"] . " " . $resultado[$i]["dia"] . ", " . $resultado[$i]["Year"] ?></div>
                                            <div>
                                                <?php
                                                if (isset($resultado[$i]["tags"])) {
                                                    foreach ($resultado[$i]["tags"] as $tag) { ?>
                                                        <span class="badge bg-success" style="background-color: rgb(126, 255, 18); margin-bottom: 50px; margin-left: 10px;"><?php echo $tag; ?></span>
                                                <?php }
                                                } ?>
                                            </div>
                                            <h2 class="card-title h4"><?php echo $resultado[$i]['titulo']; ?></h2>
                                            <p class="card-text" style="color:grey;"><?php echo $resultado[$i]['encabezado'] . "..."; ?></p>
                                            <a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado[$i]['id']; ?>">Read more →</a>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if (isset($resultado[$i + 1])) { ?>
                                <div class="col-lg-6">
                                    <div class="card mb-4">
                                        <a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado[$i + 1]['portada']; ?>" alt="..." /></a>
                                        <div class="card-body">
                                            <div class="small text-muted"><?php echo $resultado[$i + 1]["mes"] . " " . $resultado[$i + 1]["dia"] . ", " . $resultado[$i + 1]["Year"] ?></div>
                                            <div>
                                                <?php
                                                if (isset($resultado[$i + 1]["tags"])) {
                                                    foreach ($resultado[$i + 1]["tags"] as $tag) { ?>
                                                        <span class="badge bg-success" style="background-color: rgb(126, 255, 18); margin-bottom: 50px; margin-left: 10px;"><?php echo $tag; ?></span>
                                                <?php }
                                                } ?>
                                            </div>
                                            <h2 class="card-title h4"><?php echo $resultado[$i + 1]['titulo']; ?></h2>
                                            <p class="card-text" style="color:grey;"><?php echo $resultado[$i + 1]['encabezado'] . "..."; ?></p>
                                            <a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado[$i + 1]['id']; ?>">Read more →</a>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php
                    }
                    if (count($resultado) == 0) {
                    ?>
                        <h2>No se encontraron resultados para su busqueda, intente revisar su ortografia o usar palabras diferentes</h2>
                <?php
                    }
                } ?>
                <!-- Pagination-->
                <?php if (isset($_GET['categoria']) || isset($_GET['busqueda'])) {
                    if ($cant_inf['COUNT(*)'] > 0) { ?>
                        <nav aria-label="Pagination">
                            <hr class="my-0" />
                            <ul class="pagination justify-content-center my-4">
                                <?php if (isset($_GET['pag'])) { ?>
                                    <?php if ($_GET['pag'] > 1) { ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                        echo "busqueda=" . $_GET['busqueda'];
                                                                                                    } else {
                                                                                                        echo "categoria=" . $_GET['categoria'];
                                                                                                    }
                                                                                                    if ($_GET['pag'] - 1 != 1) {
                                                                                                        echo "&pag=" . $_GET['pag'] - 1;
                                                                                                    } ?>" tabindex="-1" aria-disabled="true">Anterior</a></li>
                                    <?php }
                                }
                                if (isset($_GET['pag'])) {
                                    if ($_GET['pag'] > 1) { ?>
                                        <li class="page-item" aria-current="page"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                                            echo "busqueda=" . $_GET['busqueda'];
                                                                                                                        } else {
                                                                                                                            echo "categoria=" . $_GET['categoria'];
                                                                                                                        }
                                                                                                                        if ($_GET['pag'] - 1 != 1) {
                                                                                                                            echo "&pag=" . $_GET['pag'] - 1;
                                                                                                                        } ?>"><?php echo $_GET['pag'] - 1; ?></a></li>
                                    <?php }
                                } else { ?>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                                                echo "busqueda=" . $_GET['busqueda'];
                                                                                                                            } else {
                                                                                                                                echo "categoria=" . $_GET['categoria'];
                                                                                                                            } ?>">1</a></li>
                                <?php }
                                if (isset($_GET['pag'])) { ?>
                                    <li class="page-item active"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                            echo "busqueda=" . $_GET['busqueda'];
                                                                                                        } else {
                                                                                                            echo "categoria=" . $_GET['categoria'];
                                                                                                        } ?>&pag=<?php echo $_GET['pag']; ?>"><?php echo $_GET['pag']; ?></a></li>
                                <?php } else if ($pags >= 2) { ?>
                                    <li class="page-item"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                    echo "busqueda=" . $_GET['busqueda'];
                                                                                                } else {
                                                                                                    echo "categoria=" . $_GET['categoria'];
                                                                                                } ?>&pag=2">2</a></li>
                                    <?php }
                                if (isset($_GET['pag'])) {
                                    if ($_GET['pag'] + 1 <= $pags) { ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                        echo "busqueda=" . $_GET['busqueda'];
                                                                                                    } else {
                                                                                                        echo "categoria=" . $_GET['categoria'];
                                                                                                    } ?>&pag=<?php echo $_GET['pag'] + 1; ?>"><?php echo $_GET['pag'] + 1; ?></a></li>
                                    <?php }
                                } else if ($pags >= 3) { ?>
                                    <li class="page-item"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                    echo "busqueda=" . $_GET['busqueda'];
                                                                                                } else {
                                                                                                    echo "categoria=" . $_GET['categoria'];
                                                                                                } ?>&pag=3">3</a></li>
                                <?php } ?>
                                <?php if (isset($_GET['pag'])) {
                                    if ($_GET['pag'] != $pags && $_GET['pag'] != $pags - 1) { ?>
                                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                                        <li class="page-item"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                        echo "busqueda=" . $_GET['busqueda'];
                                                                                                    } else {
                                                                                                        echo "categoria=" . $_GET['categoria'];
                                                                                                    } ?>&pag=<?php echo $pags; ?>"><?php echo $pags ?></a></li>
                                    <?php }
                                } else if ($pags > 3) { ?>
                                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                                    <li class="page-item"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                    echo "busqueda=" . $_GET['busqueda'];
                                                                                                } else {
                                                                                                    echo "categoria=" . $_GET['categoria'];
                                                                                                } ?>&pag=<?php echo $pags; ?>"><?php echo $pags ?></a></li>
                                <?php } ?>
                                <?php if ($pags != 1 && !isset($_GET['pag'])) { ?>
                                    <li class="page-item"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                    echo "busqueda=" . $_GET['busqueda'];
                                                                                                } else {
                                                                                                    echo "categoria=" . $_GET['categoria'];
                                                                                                } ?>&pag=2">Siguiente</a></li>
                                    <?php } else if (isset($_GET['pag'])) {
                                    if ($_GET['pag'] < $pags && $_GET['pag'] > 0) { ?>
                                        <li class="page-item"><a class="page-link" href="forum.php?<?php if (isset($_GET['busqueda'])) {
                                                                                                        echo "busqueda=" . $_GET['busqueda'];
                                                                                                    } else {
                                                                                                        echo "categoria=" . $_GET['categoria'];
                                                                                                    } ?>&pag=<?php echo $_GET['pag'] + 1; ?>">Siguiente</a></li>
                                <?php }
                                } ?>
                            </ul>
                        </nav>
                <?php }
                } ?>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <form action="" method="GET" class="input-group">
                                <input name="busqueda" class="form-control" type="text" placeholder="Buscar un informe..." aria-label="..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="submit"><i class="fas fa-magnifying-glass server me-3"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="forum.php?categoria=fauna">‣ Fauna</a></li>
                                        <li><a href="forum.php?categoria=flora">‣ Flora</a></li>
                                        <li><a href="forum.php?categoria=clima">‣ Clima</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="forum.php?categoria=océano">‣ Océano</a></li>
                                        <li><a href="forum.php?categoria=medio ambiente">‣ Medio ambiente</a></li>
                                        <li><a href="forum.php?categoria=medidas">‣ Medidas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4" style=" text-align:center; cursor: pointer;">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalXl">
                            <i class="fas fa-file-arrow-up server me-3"></i>Subir un informe
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalXl" aria-labelledby="exampleModalXlLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <?php if (!isset($_SESSION['usuario'])) { ?>
                                            <h5 class="modal-title h4" id="exampleModalXlLabel">:(</h5>
                                        <?php } else { ?>
                                            <h5 class="modal-title h4" id="exampleModalXlLabel">Informe</h5>
                                        <?php } ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        if (!isset($_SESSION['usuario'])) { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <h4 class="alert-heading">Lo sentimos!</h4>
                                                <p>Para poder publicar un informe es necesario tener una cuenta registrada</p>
                                                <hr>
                                                <button type="button" class="btn btn-success"><a href="log_in.php" style="color:white;">Iniciar sesión</a></button>
                                            </div>

                                        <?php } else { ?>
                                            <form onkeydown="return event.key != 'Enter';" action="" method="POST" class="row" id="coal">
                                                <label for="formGroupTitulo" class="form-label" style="font-family: 'Montserrat', sans-serif;">Titulo</label>
                                                <input name="titulo" type="text" class="form-control" id="formGroupTitulo" required>
                                                <label for="formGroupEncabezado" class="form-label mt-3" style="font-family: 'Montserrat', sans-serif;">Encabezado</label>
                                                <input name="encabezado" type="text" class="form-control" id="formGroupEncabezado" required />
                                                <label for="formGroupDescripcion" class="form-label mt-3" style="font-family: 'Montserrat', sans-serif;">Informe:</label>
                                                <textarea name="contenido" class="form-control" id="siuu"></textarea>
                                                <!-- <label for="formGroupTags" class="form-label mt-3" style="font-family: 'Montserrat', sans-serif;">Tags:</label>
                                                <input id="tags" name="tags" type="text" class="form-control" id="formGroupTags" style="width:100px; height:20px; border-radius:0;" onkeydown="insertar_tag(event)">
                                                <div id="etiquetas"></div> -->
                                                <div style="text-align:center; border:1px solid; background-color:#7EBC12; margin-top:20px; margin-bottom:20px;">
                                                    <h3 style="text-align:center;">Categorias</h3>
                                                   
  
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#"><label for="flora">Flora</label></a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>

                                                    <label for="flora">Flora</label>
                                                    <input type="checkbox" name="flora" style="margin-right:20px;">
                                                    <label for="fauna">Fauna</label>
                                                    <input type="checkbox" name="fauna" style="margin-right:20px;">
                                                    <label for="clima">Clima</label>
                                                    <input type="checkbox" name="clima" style="margin-right:20px;">
                                                    <label for="oceano">Océano</label>
                                                    <input type="checkbox" name="oceano" style="margin-right:20px;">
                                                    <label for="medio_ambiente">Medio ambiente</label>
                                                    <input type="checkbox" name="medio_ambiente" style="margin-right:20px;">
                                                    <label for="medidas">Medidas</label>
                                                    <input type="checkbox" name="medidas" style="margin-right:20px;">
                                                </div>
                                                <input type="submit" class="btn btn-primary" value="Publicar">
                                                <!-- <input hidden type="text" id="tagg" name="tags" value=""> -->
                                                <br>
                                                <br>
                                            <?php } ?>
                                            </form>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>

</div>
<style>

</style>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="js/selector.js" referrerpolicy="origin"></script>
<script type="text/javascript" src="js/forum.js"></script>