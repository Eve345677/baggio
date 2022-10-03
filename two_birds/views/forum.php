<div class="container">
    <br>
    <br>
    <div class="row" id="cont">
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
                    <?php } ?>
                    <br>
                    <?php
                    for ($i = 0; $i < count($resultado); $i += 2) {
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
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav>
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
                    <!-- <div class="card mb-4">
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
                                        <li><a href="forum.php?categoria=oceanos">‣ Océanos</a></li>
                                        <li><a href="forum.php?categoria=medioambiente">‣ MedioAmbiente</a></li>
                                        <li><a href="forum.php?categoria=medidas">‣ Medidas</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
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