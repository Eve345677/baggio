<div style=color:black>
<div style="text-align:center">
<h1><?php echo $mil ['arma']?></h1>
</div>
<p><?php echo $mil ["info"]?></p>
<?php
    require_once "includes/config.php"; 
    $jy=$mil['arma'];
    
echo  '<img  style="width:500px; height:300px;"src="img/armas/'.$_GET['tabla'].'/'.$jy.'.jpg" > ';
     ?>
     <h3>Caracteristicas principales:</h3>
     <h4><?php echo $mil["peso"]?></h4>
     <h4><?php echo $mil["alcance"]?></h4>
     <br><br><br>
     <div style="color:black">
     <h3>Tambien te puede interesar</h3>
     <hr class="featurette-divider">
     <ul>
        <li><a href="conflictos.php?id=3">Guerra de Brasil_Argentina</a></li>
        <li><a href="autoridades.php">Autoridades de defensa</a></li>
        <li><a href="armas.php?tabla=ametralladoras">Rangos del Ejercito</a></li>
        <li><a href="conflictos.php?id=1">Guerra de la independencia argentina</a></li>
        <li><a href="divisiones_alta.php">Vender arma</a></li>
        <li><a href="divisiones_lista.php">Mercado libre</a></li>
    </ul>
</div>
</div>