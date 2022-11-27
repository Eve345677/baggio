<link rel="stylesheet" href="css/compras.css">
<?php foreach ($dou as $xd) { ?>
    <div class="container" style="color:black">
        <h1 class="compra">Nombre Del Producto: <?php echo $xd['nombre'] ?></h1><br>
        <hr class="linea">
        </hr><br>
        <?php
        if (file_exists('img/' . $xd['id'] . '/principal.jpg')) { ?>
            <img width="1460" height="350" src="img/<?php echo $xd['id']; ?>/principal.jpg">
        <?php
        } ?>
        <br>
        <hr class="linea">
        </hr>
        <h2 class="titular">Descripcion:</h2><br>
        <p class="informacion"> <?php echo $xd['descripcion'] ?></p><br><br>
        <h2 class="titular">Precio</h2><br>
        <p class="informacion"> <?php echo $xd['precio'] ?> Gcoins</p><br>
        <h1 class="compra">Metodos de Pago</h1><br>
        <hr class="linea">
        </hr><br>
        <form action="" method="post">
        <button class="btn btn-primary" type="submit" name="submits">Comprar</button>
        <a href="divisiones_lista.php"><button class="btn btn-primary">Cancelar</button></a>
        </form>
    </div>
<?php } ?>