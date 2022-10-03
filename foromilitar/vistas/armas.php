<html>

<head></head>

<body>
	<div>
	</div>

	<div id="info" class="col-6" style="color:black;">
		<?php foreach ($dou as $mil) { ?>
			<hr class="featurette-divider">
			<div>
			<?php
    require_once "includes/config.php"; 
    $jy=$mil['arma'];
    
echo  '<img  style="width:200px; height:200px;"src="img/armas/'.$_GET['tabla'].'/'.$jy.'.jpg" > ';
     ?>
				<h3><?php echo $mil["arma"] ?></h1>
				</h3>
				<?php 
				$mil["info"] = str_split($mil["info"], 300);
				?>
				<p id="info_contenido"><?php echo $mil["info"][0]; ?>......</p>
				<a href="armas2.php?id=<?php echo $mil['id']; ?>&&tabla=<?php echo $_GET['tabla'] ?>" >Leer mas <i class="fas fa-angle-double-right"></i></a>
			</div>
			<br><br>
		<?php } ?>
	</div>
</body>

</html>