<?php
if (isset($_SESSION['usu'])) {
?>
    <div class="col-9" style="color:black;">
        <link rel="stylesheet" href="css/divisiones_listaa.css">
        <h1 align="center" style="color:red">Armas en venta</h1>
        <div class="news-cards">
            <?php foreach ($dou as $xd) { ?>
                <div class="row">
                    <br>
                    <div class="single-product">
                        <div class="product-f-image">
                            <?php
                            if (file_exists('img/' . $xd['id'] . '/principal.jpg')) { ?>
                                <img width="250" height="250" src="img/<?php echo $xd['id']; ?>/principal.jpg">
                            <?php
                            } ?>
                            <div class="product-hover">
                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Agregar al carrito</a>
                            </div>
                        </div>
                        <h2><?php echo $xd['nombre'] ?></h2>
                        <p>Nacionalidad: <?php echo $xd['nacioanlidad'] ?></p>
                        <p>Tipo de arma: <?php echo $xd['tipo'] ?></p>
                        <div class="product-carousel-price">
                            <a>Precio: <?php echo $xd['precio'] ?></a><br>
                        </div>
                        <p id="info_contenido">
                            <!--aqui se agregara la informacion que el usuario coloque en la caja de texto PROXIMAMENTE-->
                        </p>
                        <a href="divisiones_eliminar.php?id=<?php echo $xd['id']; ?>">
                            <p>Eliminar</p>
                        </a>
                        <a href="divisiones_lista.php?el=<?php echo $xd['id']; ?>">
                            <p id="modificar" onclick="aparece()">Editar</p>
                        </a><br>
                        <a href="compras.php?id=<?php echo $xd['id']?>">
                            <p>Comprar</p>
                        </a>
                        <a href="divisiones_lista2.php?id=<?php echo $xd['id']?>">
                            <p>Leer Mas</p>
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>
        <div id="modificacion" style="display:
			<?php

            foreach ($dou as $o) {
                if ($o['id'] == $_GET["el"]) {
                    echo "block";
                }
            }
            ?>;
			">
            <div id="modificacion_salir" onclick="modificacion_salir()" style="cursor: hand;">x</div>
            <h2>Modificaciones disponibles:</h2>
            <list>
                <p onclick="modificacion_nombre()" style="cursor: hand;">Nombre</p>
                <div class="modificacion_modificado" id="modificacion_id_nombre" style="display: none;">
                    <div id="modificacion_id_nombre_salir" onclick="modificacion_nombre_salir()" style="cursor: hand;">x</div>
                    <form action="divisiones_modificar_nombre.php" method="POST">
                        <p>Cambiar Nombre:</p>
                        <input type="text" name="cambio">
                        <input type="text" hidden value="#" name="id" id="input_nombre">
                        <input type="submit" value="Guardar">
                    </form>
                </div>
                <p onclick="modificacion_tipo()" style="cursor: hand;">Tipo</p>
                <div class="modificacion_modificado" id="modificacion_id_tipo" style="display: none;">
                    <div id="modificacion_id_tipo_salir" onclick="modificacion_tipo_salir()" style="cursor: hand;">x</div>
                    <form action="divisiones_modificar_tipo.php" method="POST">
                        <p>Cambiar Tipo:</p>
                        <input type="text" name="cambio">
                        <input type="text" hidden value="#" name="id" id="input_tipo">
                        <input type="submit" value="Guardar">
                    </form>
                </div>
                <p onclick="modificacion_nacionalidad()" style="cursor: hand;">Nacionalidad</p>
                <div class="modificacion_modificado" id="modificacion_id_nacionalidad" style="display: none;">
                    <div id="modificacion_id_nacionalidad_salir" onclick="modificacion_nacionalidad_salir()" style="cursor: hand;">x</div>
                    <form action="divisiones_modificar_nacionalidad.php" method="POST">
                        <p>Cambiar Nacionalidad:</p>
                        <input type="text" name="cambio">
                        <input type="text" hidden value="#" name="id" id="input_nacionalidad">
                        <input type="submit" value="Guardar">
                    </form>
                </div>
                <p onclick="modificacion_precio()" style="cursor: hand;">Precio</p>
                <div class="modificacion_modificado" id="modificacion_id_precio" style="display: none;">
                    <div id="modificacion_id_precio_salir" onclick="modificacion_precio_salir()" style="cursor: hand;">x</div>
                    <form action="divisiones_modificar_precio.php" method="POST">
                        <p>Cambiar Precio:</p>
                        <input type="text" name="cambio">
                        <input type="text" hidden value="#" name="id" id="input_precio">
                        <input type="submit" value="Guardar">
                    </form>
                </div>
            </list>
        </div>
        <?php @$a = $_GET["el"]; ?>
        <script type="text/javascript" src="js/modificar.js"></script>
        <script>
            var a = document.getElementById("input_nombre");
            a.value = '<?php echo $a ?>';
            var b = document.getElementById("input_tipo");
            b.value = '<?php echo $a ?>';
            var c = document.getElementById("input_nacionalidad");
            c.value = '<?php echo $a ?>';
            var d = document.getElementById("input_precio");
            d.value = '<?php echo $a ?>';
        </script>
    </div>
<?php } ?>
</div>
<?php
if (!isset($_SESSION['usu'])) {
?>
    <div class="col-9" style="color:black;">
        <link rel="stylesheet" href="css/divisiones_listaa.css">
        <div class="col-sm-6">
            <div class="shopping-item">
                <a href="">Carrito <i class="fa fa-shopping-cart"></i></a>
            </div>
        </div>
        <h1 align="center" style="color:red">Armas en venta</h1>
        <div class="news-cards">
            <?php foreach ($dou as $xd) { ?>
                <div class="row">
                    <br>
                    <div class="single-product">
                        <div class="product-f-image">
                            <?php
                            if (file_exists('img/' . $xd['id'] . '/principal.jpg')) { ?>
                                <img width="250" height="250" src="img/<?php echo $xd['id']; ?>/principal.jpg">
                            <?php
                            } ?>
                            <div class="product-hover">
                                <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart" onclick="mostrar()"></i> Agregar al carrito</a>
                            </div>
                        </div>
                        <h2><?php echo $xd['nombre'] ?></h2>
                        <p>Nacionalidad: <?php echo $xd['nacioanlidad'] ?></p>
                        <p>Tipo de arma: <?php echo $xd['tipo'] ?></p>
                        <p>Descripcion: <?php echo $xd['descripcion'] ?></p>
                        <div class="product-carousel-price">
                            <a>Precio: <?php echo $xd['precio'] ?></a><br>
                        </div>
                        <p id="info_contenido">
                            <!--aqui se agregara la informacion que el usuario coloque en la caja de texto PROXIMAMENTE-->
                        </p>
                        <a>
                            <p onclick="mostrar()">Comprar</p>
                        </a>
                        <a href="divisiones_lista2.php?id=<?php echo $xd['id']?>">
                            <p>Leer Mas</p>
                        </a>
                    </div>
                </div>
            <?php } ?>

        </div>

    <?php } ?>

    <br>
    <br>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="js/division_alta.js"></script>
    </form>
    </div>