<div class="col-9">
    <h1 style="text-align: left;">Indice de <?php echo $_GET['titulo'] ?></h1>
    <br>
    <list>
        <?php foreach ($dou as $xd) { ?>
            <a href="<?php echo $_GET['categoria']; ?>.php?nombre=<?php echo $xd['arma']; ?>&tabla=<?php echo $_GET['tabla']; ?>">
                <li><?php echo $xd['arma'] ?> </li>
            </a><a href="indices_eliminar.php?tabla=<?php echo $_GET['tabla']; ?>&nombre=<?php echo $xd['arma']; ?>&titulo=<?php echo $_GET['titulo']; ?>&categoria=<?php echo $_GET['categoria']; ?>"> Eliminar</a>
        <?php } ?>
    </list>
</div>