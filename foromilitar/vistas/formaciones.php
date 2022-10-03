<div id="info" class="col-6" style="color:black">
    <h1><?php echo $dou[0]["nom_grup"] ?></h1> <!-- aqui pon el nombre de la sección -->
    <p id="info_contenido"><?php echo $dou[0]["informacion"]; ?></p>
    <h3>Conformado por:</h3>
    <p id="info_contenido"><?php echo $dou[0]["conformado"]; ?></p>
    <img src="" alt="" />
    <!-- colocar aqui la info de la arma :b -->
</div>
<div id="perfil" class="col-3">
    <?php
    require_once "includes/config.php"; 
    $jy=$_GET['id'];
    
echo  '<img src="img/ejercito'.$jy.'.jpg" > ';
     ?>
     <br><br><br><br>
     <div style="color:black">
     <h3>Tambien te puede interesar</h3>
     <hr class="featurette-divider">
     <ul>
        <li><a href="conflictos.php?id=3">Guerra de Brasil_Argentina</a></li>
        <li><a href="autoridades.php">Autoridades de defensa</a></li>
        <li><a href="armas.php?tabla=ametralladoras">Armas del Ejercito</a></li>
        <li><a href="conflictos.php?id=1">Guerra de la independencia argentina</a></li>
        <li><a href="divisiones_alta.php">Vender arma</a></li>
        <li><a href="divisiones_lista.php">Mercado libre</a></li>
    </ul>
</div>
</div>