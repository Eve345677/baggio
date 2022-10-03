<div class="container mt-5" id="titulo">
	<div class="row" id="cont">
		<div class="col-lg-8">
			<!-- Post content-->
			<article>
				<br><br>
				<!-- Post header-->
				<header class="mb-4">
					<!-- Post title-->
					<h1 class="fw-bolder mb-1"><?php echo $resultado['titulo']; ?></h1>
					<!-- Post meta content-->
					<div class="text-muted fst-italic mb-2">Subido en <?php echo $resultado['mes'] . " " . $resultado['dia'] . ", " . $resultado['Year'] . " por " . $propietario[0]['user_name'] . "." ?></div>
					<?php if (isset($resultado['mes_m'])) { ?>
						<div class="text-muted fst-italic mb-2">Ultima modificación <?php echo $resultado['mes_m'] . " " . $resultado['dia_m'] . ", " . $resultado['Year_m'] . "." ?></div>
					<?php } ?>
					<!-- Post categories-->
					<div>
						<?php
						foreach ($resultado["tags"] as $tag) { ?>
							<span class="badge bg-success" style="background-color: rgb(126, 255, 18); margin-bottom: 50px; margin-left: 10px;"><?php echo $tag['categoria']; ?></span>
						<?php } ?>
					</div>
				</header>
				<section class="mb-5">
					<?php echo $resultado['contenido']; ?>
				</section>
				<?php if(isset($_SESSION['usuario'])){ ?>
				<div>
					<form style="float:right;" action="squeak.php" method="POST">
						<button type="submit" name="fav" style="padding:0; border:none;"><img src="img/<?php if (isset($fav)) {
																											echo $fav;
																										} else {
																											echo "star.png";
																										} ?>" width="30" height="30"></button>
					</form>
					<form action="squeak.php" method="POST">
						<button type="submit" name="like" style="padding:0; border:none;"><img src="img/<?php if (isset($like)) {
																											echo $like;
																										} else {
																											echo "like.png";
																										} ?>" width="30" height="30"></button>
						<span style="font-size:20px;">(<?php echo $resultado['likes']; ?>)</span>
						<img src="img/view.png" width="30" height="30">
						<span id="like" style="font-size:20px;">(<?php echo $resultado['contador_vistas']; ?>)</span>
					</form>
				</div>
				<?php } ?>
				<br>
			</article>
			<!-- Comments section-->
			<section class="mb-5" id="comentarios">
				<div class="card bg-light">
					<div class="card-body">
						<!-- Comment form-->
						<h2>Comentarios (<?php echo count($comentarios); ?>)</h2>
						<?php if (!isset($_SESSION['usuario'])) { ?>
							<div class="alert alert-danger" role="alert">
								<h4 class="alert-heading">Lo sentimos!</h4>
								<p>Para poder comentar es necesario tener una cuenta registrada</p>
								<hr>
								<button type="button" class="btn btn-success"><a href="log_in.php" style="color:white;">Iniciar sesión</a></button>
							</div>
						<?php } else { ?>
							<form class="mb-4" method="POST">
								<textarea required class="form-control" rows="3" placeholder="Join the discussion and leave a comment!" style="resize: none;" name="comentario"></textarea>
								<br>
								<button type="submit" class="btn btn-primary" style="cursor:pointer; background-color:#7EBC12;">Comentar</button>
							</form>
						<?php } ?>
						<!-- Comment with nested comments-->
						<?php
						for ($i = 0; $i < count($comentarios); $i++) { 
							if(!isset($comentarios[$i]['comentario_padre_id'])){ ?>
							<br>
							<div class="d-flex">
								<div class="flex-shrink-0"><img class="rounded-circle" src="img/<?php echo $comentarios[$i]['foto']; ?>" alt="..." style="width:40px;height:40px;" /></div>
								<div class="ms-1" id="r<?php echo $comentarios[$i]['id']; ?>">
									<div class="fw-bold"><?php echo $comentarios[$i]['user_name']; ?></div>
									<?php echo $comentarios[$i]['comentario']; ?>
									<br>
									<br>
									<input type="button" value="Responder" style="border:none; background-color:transparent; font-weight:bold;" onclick="responder('r<?php echo $comentarios[$i]['id']; ?>')">
								</div>
							</div>
							<br>
								<div>
									<?php } for ($j = 0; $j < count($comentarios); $j++) { 
										if($comentarios[$i]['id'] == $comentarios[$j]['comentario_padre_id']){ ?>
										<div class="d-flex" style="margin-left:50px;">
											<div class="flex-shrink-0"><img class="rounded-circle" src="img/<?php echo $comentarios[$j]['foto']; ?>" alt="..." style="width:40px;height:40px;" /></div>
											<div class="ms-3">
												<div class="fw-bold"><?php echo $comentarios[$j]['user_name']; ?></div>
												<?php echo $comentarios[$j]['comentario']; ?>
											</div>
										</div>
										<br>
									<?php } } ?>
						<?php } ?>
					</div>
				</div>
			</section>
		</div>
		<!-- ------boton modificar------ -->
		<?php
		if (isset($_SESSION['usuario'])) {
			if ($_SESSION['usuario']['id'] == $resultado['usuario_id']) { ?>
				<div class="col-lg-4">
					<br><br>
					<div class="card mb-4" style="background-color: #7EBC12; text-align:center; cursor: pointer;" onclick="aparecer()">
						<h5 style="font-family: 'Montserrat', sans-serif"><i class="bi bi-pencil"></i> Modificar</h5>
					</div>
					<br>
					<!-- ------boton eliminar------ -->
					<div class="card mb-4" style="background-color: #7EBC12; text-align:center; cursor: pointer;" onclick="eliminar_informe_f()">
						<h5 style="font-family: 'Montserrat', sans-serif"><i class="bi bi-trash"></i> Eliminar</h5>
					</div>
				</div>
			<?php }
			if ($_SESSION['usuario']['id'] != $resultado['usuario_id'] && ($_SESSION['usuario']['rango'] == 3 || ($_SESSION['usuario']['rango'] == 2 && $propietario['rango'] != 3))) { ?>
				<div class="col-lg-4">
					<br><br>
					<!-- ------boton eliminar------ -->
					<div class="card mb-4" style="background-color: #7EBC12; text-align:center; cursor: pointer;" onclick="eliminar_informe_f()">
						<h5 style="font-family: 'Montserrat', sans-serif"><i class="bi bi-trash"></i> Eliminar</h5>
					</div>
				</div>
		<?php }
		} ?>
	</div>
	<?php
	if (isset($_SESSION['usuario'])) {
		if ($_SESSION['usuario']['id'] == $resultado['usuario_id']) { ?>
			<form onkeydown="return event.key != 'Enter';" action="squeak.php?pref=<?php echo "333%yet"; ?>" method="POST" class="row" id="coal" style="display:none; height:100%; width:100%; background-color:#7EBC12; border:solid;">
				<div onclick="salir()" style="background-color:red; border:solid 0.5px black; width:34px; height:20px; cursor: pointer;">x</div>
				<br>
				<br>
				<br>
				<h2>Subir un informe nuevo:</h2>
				<br>
				<br>
				<br>
				<label for="formGroupTitulo" class="form-label">Titulo</label>
				<input name="titulo" type="text" class="form-control" id="formGroupTitulo" value="<?php echo $resultado['titulo']; ?>" required>
				<label for="formGroupEncabezado" class="form-label mt-3">Encabezado</label>
				<input name="encabezado" type="text" class="form-control" id="formGroupEncabezado" value="<?php echo $resultado['encabezado']; ?>" required />
				<label for="formGroupDescripcion" class="form-label mt-3">Informe:</label>
				<textarea name="contenido" class="form-control" id="siuu"><?php echo $resultado['contenido']; ?></textarea>
				<label for="formGroupTags" class="form-label mt-3">Tags:</label>
				<div style="text-align:center; border:1px solid; background-color:#7EBC12; margin-top:20px; margin-bottom:20px;">
					<h3 style="text-align:center;">Categorias</h3>
					<label for="flora">Flora</label>
					<input type="checkbox" <?php if(in_a("flora",$resultado['tags'])){ echo "checked"; } ?> name="flora" style="margin-right:20px;">
					<label for="fauna">Fauna</label>
					<input type="checkbox" <?php if(in_a("fauna",$resultado['tags'])){ echo "checked"; } ?> name="fauna" style="margin-right:20px;">
					<label for="clima">Clima</label>
					<input type="checkbox" <?php if(in_a("clima",$resultado['tags'])){ echo "checked"; } ?> name="clima" style="margin-right:20px;">
					<label for="oceano">Océano</label>
					<input type="checkbox" <?php if(in_a("océano",$resultado['tags'])){ echo "checked"; } ?> name="oceano" style="margin-right:20px;">
					<label for="medio_ambiente">Medio ambiente</label>
					<input type="checkbox" <?php if(in_a("medio ambiente",$resultado['tags'])){ echo "checked"; } ?> name="medio_ambiente" style="margin-right:20px;">
					<label for="medidas">Medidas</label>
					<input type="checkbox" <?php if(in_a("medidas",$resultado['tags'])){ echo "checked"; } ?> name="medidas" style="margin-right:20px;">
				</div>
				<input type="submit" class="mt-5" value="Guardar" style="width:40%; margin-left:30%; background-color:green; color:white; ">
				<br>
				<br>
			</form>
			<form class="row" id="lop" method="POST" action="squeak.php?prem=<?php echo "333%yet"; ?>" style="display:none; height:100%; width:100%; background-color:#7EBC12; border:solid; text-align:center;">
				<h2>¿Esta seguro?</h2>
				<p>Esta acción no es reversible</p>
				<p><input type="submit" class="mt-5" value="Eliminar" name="eliminar" style="width:15%; background-color:red; color:white; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="salir()" class="mt-5" value="Cancelar" style="width:15%; background-color:green; color:white; "></p>
			</form>
	<?php }
	} ?>
	<?php
	if (isset($_SESSION['usuario'])) {
		if (($_SESSION['usuario']['rango'] == 3 || ($_SESSION['usuario']['rango'] == 2 && $propietario['rango'] != 3)) && $_SESSION['usuario']['id'] != $resultado['usuario_id']) { ?>
			<form class="row" id="lop" method="POST" action="squeak.php?prey=<?php echo "333%yet"; ?>" style="display:none; height:100%; width:100%; background-color:#7EBC12; border:solid; text-align:center;">
				<p style="font-weight:bold; font-size:24px;">Razon por la que eliminas el informe</p>
				<textarea style="resize:none; margin-left:10%; width:80%; height:300px;" name="ban_info" placeholder="Escriba su justificación..." maxlength="1000" required></textarea>
				<p><input type="submit" class="mt-5" value="Eliminar" name="eliminar" style="width:15%; background-color:red; color:white; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="salir()" class="mt-5" value="Cancelar" style="width:15%; background-color:green; color:white; "></p>
			</form>
	<?php }
	} ?>
</div>
<?php
if (isset($_SESSION['usuario'])) {
	if ($_SESSION['usuario']['id'] == $resultado['usuario_id']) { ?>
		<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
		<script src="js/selector.js" referrerpolicy="origin"></script>
		<script type="text/javascript" src="js/forum.js"></script>
		<script type="text/javascript" src="js/squeak.js"></script>
	<?php }
	if ($_SESSION['usuario']['id'] != $resultado['usuario_id'] && (($_SESSION['usuario']['rango'] == 2 && $propietario['rango'] != 3) || $_SESSION['usuario']['rango'] == 3)) { ?>
		<script type="text/javascript" src="js/squeak_pro.js"></script>
	<?php } ?>
	<script type="text/javascript" src="js/squeak_r.js"></script>
<?php } ?>