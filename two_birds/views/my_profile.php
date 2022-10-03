<div class="container-xxl bg-white p-0">
	<br>
	<br>
	<br>
	<!-- Spinner Start -->
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<p id="atajo"></p>
	<?php
	if (isset($_SESSION['usuario'])) {
	?>
		<div class="container" id="origen" style="display:block; background-image: url(img/pbg.jpg); background-repeat: no-repeat; background-size: cover">
			<div class="row bg-light" style="font-size:20px; text-align:center;">
				<p style="margin-top:1%;"><a id="nav_principal" onclick="principal_aparecer()" style="cursor:pointer; text-decoration:underline;">Pagina principal</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a id="nav_favoritos" onclick="favoritos_aparecer()" style="cursor:pointer; text-decoration:none;">Favoritos</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a id="nav_informes" onclick="informes_aparecer()" style="cursor:pointer; text-decoration:none;">Informes</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a id="nav_buzon" onclick="buzon_aparecer()" style="cursor:pointer; text-decoration:none;">Buzon</a><?php if (isset($users)) { ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a id="nav_usuarios" onclick="usuarios_aparecer()" style="cursor:pointer; text-decoration:none;">Usuarios</a><?php } ?><i class="bi bi-gear" style="float:right; cursor:pointer;" onclick="configuracion()"></i></p>
			</div>
			<div class="row" id="principal" style="display:flex;">
				<!-- Blog entries-->
				<div class="col-lg-8">
					<h2><?php echo $_SESSION['usuario']['user_name']; ?></h2>
					<br>
					<img class="rounded-circle" src="img/<?php echo $_SESSION['usuario']['foto']; ?>" id="foto" style="object-fit:cover; border:solid 5px #7EBC12; border-radius:20%;">
					<br>
					<br>
					<br>
					<div class="form_1">
						<form method="post" enctype="multipart/form-data" action="my_profile.php">
							<input type="hidden" name="nombre" value="<?php echo $user; ?>" id="123">
							<p>Editar foto:</p>
							<div class="file-select" id="file_1">
								<input type="file" style="color: transparent;" name="archivo" value="">
							</div>
							<br>
							<div class="file-select" id="file_2">
								<input type="submit" name="subir-imagen" value="Guardar cambios" style="background-color:blue; color:white;" />
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-4 border border-dark" style="margin-top:6%; background-image: url(img/profile_bg.jpg)">
					<br>
					<strong>
						<p>Información del usuario:</p>
					</strong>
					<list>
						<ul>
							<li>Informes subidos:</li>
							<br>
							<li>Fecha de creación de la cuenta:</li>
							<br>
							<li>Nacionalidad:</li>
						</ul>
					</list>
				</div>
			</div>
			<div class="row" style="display:none;" id="favoritos">
				<!-- Blog entries-->
				<h2>Favoritos</h2>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php
				if (isset($resultado)) {
					for ($i = 0; $i < count($resultado); $i += 2) {
				?><div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-5">
								<div class="card mb-4">
									<a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado[$i]['portada']; ?>" alt="..." /></a>
									<div class="card-body">
										<div class="small text-muted"><?php echo $resultado[$i]["mes"] . " " . $resultado[$i]["dia"] . ", " . $resultado[$i]["Year"] ?></div>
										<h2 class="card-title h4"><?php echo $resultado[$i]['titulo']; ?></h2>
										<p class="card-text" style="color:grey;"><?php echo $resultado[$i]['encabezado'] . "..."; ?></p>
										<a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado[$i]['id']; ?>">Read more →</a>
									</div>
								</div>
							</div>
							<?php if (isset($resultado[$i + 1])) { ?>
								<div class="col-lg-5">
									<div class="card mb-4">
										<a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado[$i + 1]['portada']; ?>" alt="..." /></a>
										<div class="card-body">
											<div class="small text-muted"><?php echo $resultado[$i + 1]["mes"] . " " . $resultado[$i + 1]["dia"] . ", " . $resultado[$i + 1]["Year"] ?></div>
											<h2 class="card-title h4"><?php echo $resultado[$i + 1]['titulo']; ?></h2>
											<p class="card-text" style="color:grey;"><?php echo $resultado[$i + 1]['encabezado'] . "..."; ?></p>
											<a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado[$i + 1]['id']; ?>">Read more →</a>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
				<?php
					}
				} ?>
			</div>
			<div class="row" style="display:none;" id="informes">
				<!-- Blog entries-->
				<h2>Mis informes</h2>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php
				if (isset($resultado1)) {
					for ($i = 0; $i < count($resultado1); $i += 2) {
				?><div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-5">
								<div class="card mb-4">
									<a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado1[$i]['portada']; ?>" alt="..." /></a>
									<div class="card-body">
										<div class="small text-muted"><?php echo $resultado1[$i]["mes"] . " " . $resultado1[$i]["dia"] . ", " . $resultado1[$i]["Year"] ?></div>
										<h2 class="card-title h4"><?php echo $resultado1[$i]['titulo']; ?></h2>
										<p class="card-text" style="color:grey;"><?php echo $resultado1[$i]['encabezado'] . "..."; ?></p>
										<a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado1[$i]['id']; ?>">Read more →</a>
									</div>
								</div>
							</div>
							<?php if (isset($resultado1[$i + 1])) { ?>
								<div class="col-lg-5">
									<div class="card mb-4">
										<a href="#!"><img class="card-img-top" height="250px" src="img/portadas/<?php echo $resultado1[$i + 1]['portada']; ?>" alt="..." /></a>
										<div class="card-body">
											<div class="small text-muted"><?php echo $resultado1[$i + 1]["mes"] . " " . $resultado1[$i + 1]["dia"] . ", " . $resultado1[$i + 1]["Year"] ?></div>
											<h2 class="card-title h4"><?php echo $resultado1[$i + 1]['titulo']; ?></h2>
											<p class="card-text" style="color:grey;"><?php echo $resultado1[$i + 1]['encabezado'] . "..."; ?></p>
											<a class="btn btn-primary" href="squeak.php?id=<?php echo $resultado1[$i + 1]['id']; ?>">Read more →</a>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
				<?php
					}
				} ?>
			</div>
			<?php if (isset($users)) { ?>
				<div class="row" style="display:none;" id="usuarios">
					<!-- Blog entries-->
					<h2>Lista de usuarios</h2>
					<br>
					<br>
					<br>
					<br>
					<br>
					<table class="table table-striped" style="text-align:center;">
						<thead>
							<tr>
								<th scope="col">Usuario</th>
								<th scope="col">Rango</th>
								<th scope="col">Acciones</th>
							</tr>
						</thead>
						<tbody>

							<?php
							foreach ($users as $user) {
								$admin1 = false;
								$mod1 = false;
								$user["rango"] = "user";
								foreach ($user['rangos'] as $ran) {
									if ($ran == "admin") {
										$admin1 = true;
										$user["rango"] = "admin";
										break;
									}
									else if ($ran == "mod") {
										$mod1 = true;
										$user["rango"] = "mod";
									}
								}
								if ($user['id'] != $_SESSION['usuario']['id']) { ?>
									<tr>
										<td><?php echo $user['user_name']; ?></td>
										<td><?php echo $user['rango']; ?></td>
										<?php if ($admin == true || ($mod == true && $admin1 == false)) { ?>
											<td><input type="button" value="Eliminar" name="eliminar" onclick="eliminar_us_abrir(<?php echo $user['id']; ?>)" style="width:15%; background-color:red; color:white; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="rango_us_abrir(<?php echo $user['id']; ?>)" value="Rango" style="width:15%; background-color:green; color:white; "></td>
										<?php } ?>
										</tr>
							<?php }
							} ?>
						</tbody>
					</table>
				</div>
			<?php } ?>
			<div class="row" style="display:none;" id="buzon">
				<!-- Blog entries-->
				<h2>Buzon</h2>
				<h5>Mensajes: <?php echo count($moderacion); ?></h5>
				<br>
				<br>
				<br>
				<br>
				<br>
				<?php if (count($moderacion) > 0) { ?>
					<?php foreach ($moderacion as $e) { ?>
						<div class="card">
							<div class="card-header">
								Featured
							</div>
							<div class="card-body">
								<form method="POST">
									<input type="submit" name="msj_d" value="x" class="bg-danger" style="float:right;">
									<input type="hidden" name="id" value="<?php echo $e['id']; ?>">
								</form>
								<h5 class="card-title">Moderación</h5>
								<p class="card-text"><?php echo $e['moderacion'] ?></p>
								<p class="card-text">Informe eliminado: <?php echo $e['titulo'] ?></p>
							</div>
						</div>
						<br>
						<br>
					<?php
					}
				} else { ?>
					<p style="text-align:center;">Tus mensajes apareceran aqui</p>
				<?php } ?>
			</div>
			<br>
			<br>
			<br>
			<br>
		</div>
		<?php if (isset($users)) { ?>
			<form class="container" id="eliminar_us" method="POST" action="my_profile.php" style="display:none; background-color:#7EBC12; border:solid; text-align:center;">
				<h2>¿Esta seguro?</h2>
				<p>Esta acción no es reversible</p>
				<p><input type="submit" class="mt-5" value="Eliminar" name="eliminar" style="width:15%; background-color:red; color:white; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="eliminar_us_cerrar()" class="mt-5" value="Cancelar" style="width:15%; background-color:green; color:white; "></p>
				<input type="hidden" name="id_d" value="#" id="sec">
			</form>
			<div class="container" id="rango_us" style="display:none; background-color:#7EBC12; border:solid; text-align:center; padding:0;">
				<h2 class="bg-success">Rangos</h2>
				<div class="row" id="rango_us_prin" style="display:block;">
					<p><input type="button" onclick="rango_us_asc()" class="mt-5" value="Ascender" style="width:15%; background-color:blue; color:white; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="rango_us_deg()" class="mt-5" value="Degradar" style="width:15%; background-color:red; color:white; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="rango_us_cerrar()" class="mt-5" value="Cancelar" style="width:15%; background-color:green; color:white; "></p>
				</div>
				<form class="row" id="rango_us_ascender" style="display:none;" method="POST">
					<p>Estas por ascender a un usuario, ¿Concretar ascenso?</p>
					<p><input type="submit" class="mt-5" value="Ascender" name="ascender" style="width:15%; background-color:blue; color:white; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="rango_us_cerrar()" class="mt-5" value="Cancelar" style="width:15%; background-color:green; color:white; "></p>
					<input type="hidden" name="id_asc" value="#" id="sec_asc">
				</form>
				<form class="row" id="rango_us_degradar" style="display:none;" method="POST">
					<p>Estas por degradar a un usuario, ¿Concretar degradación?</p>
					<p><input type="submit" class="mt-5" value="Degradar" name="degradar" style="width:15%; background-color:red; color:white; ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="button" onclick="rango_us_cerrar()" class="mt-5" value="Cancelar" style="width:15%; background-color:green; color:white; "></p>
					<input type="hidden" name="id_deg" value="#" id="sec_deg">
				</form>
			</div>
		<?php } ?>
		

		<!--<div class="container rounded bg-white mt-5 mb-5" id="config" style="display:none;">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>-->


		<div class="container border border-dark" id="config" style="display:none;">
			<div class="row text-white" style="font-size:20px; text-align:center;background-color:blue;">
				<div class="bg-danger border border-dark" style="float:right; width:40px; cursor:pointer;" onclick="configuracion_salir()">x</div>
				<p style="margin-top:1%;">Configuración</p>
			</div>
			<div class="row">
				<div class="col-3 border border-dark" style="padding:0;">
					<ul class="list-group">
						<li class="list-group-item">Información del usuario</li>
					</ul>
				</div>
				<div class="col-9" id="info_usuario" style="display:block;">
					<br>
					<strong>
						<p style="font-size:25px;">Modificar informacion del usuario</p>
					</strong>
					<strong>
						<p>Nombre de usuario</p>
					</strong>
					<p id="nombre"><?php echo $_SESSION['usuario']['user_name']; ?> &nbsp;<span style="cursor:pointer;"><i class="bi bi-pencil" onmouseover="modificar_vent('nombre')" onmouseout="eliminar_vent('nombre')" onclick="nombre_change()"></i></span></p>
					<br>
					<strong>
						<p>Correo electronico</p>
					</strong>
					<p id="email"><?php echo $_SESSION['usuario']['email']; ?> &nbsp;<span style="cursor:pointer;"><i class="bi bi-pencil" onmouseover="modificar_vent('email')" onmouseout="eliminar_vent('email')" onclick="email_change()"></i></span></p>
					<br>
					<strong>
						<p>Contraseña</p>
					</strong>
					<p id="contraseña">***************** &nbsp;<span style="cursor:pointer;"><i class="bi bi-pencil" onmouseover="modificar_vent('contraseña')" onmouseout="eliminar_vent('contraseña')" onclick="contra_change()"></i></span></p>
				</div>
				<div class="col-9" id="cambiar_nombre" style="display:none;">
					<form method="post">
						<br>
						<i class="bi bi-arrow-90deg-left border border-dark bg-success" onclick="volver_infousu()" style="cursor:pointer;"></i>
						<br>
						<br>
						<div class="form-element">
							<label style="font-family: 'Montserrat', sans-serif;">Nuevo nombre de usuario:</label>
							<input type="text" name="username" value="<?php echo $_SESSION['usuario']['user_name']; ?>" required />
						</div>
						<br>
						<br>
						<br>
						<input type="submit" name="insert" value="Guardar cambios" style="font-family: 'Montserrat', sans-serif;">
						<br>
						<br>
					</form>
				</div>
				<div class="col-9" id="cambiar_email" style="display:none;">
					<form method="post">
						<br>
						<i class="bi bi-arrow-90deg-left border border-dark bg-success" onclick="volver_infousu()" style="cursor:pointer;"></i>
						<br>
						<br>
						<div class="form-element">
							<label style="font-family: 'Montserrat', sans-serif;">Nuevo correo electronico:</label>
							<input type="text" name="email" value="<?php echo $_SESSION['usuario']['email']; ?>" required />
						</div>
						<br>
						<br>
						<br>
						<input type="submit" name="insert" value="Guardar cambios" style="font-family: 'Montserrat', sans-serif;">
						<br>
						<br>
					</form>
				</div>
				<div class="col-9" id="cambiar_contraseña" style="display:none;">
					<form method="post">
						<br>
						<i class="bi bi-arrow-90deg-left border border-dark bg-success" onclick="volver_infousu()" style="cursor:pointer;"></i>
						<br>
						<br>
						<div class="form-element">
							<label style="font-family: 'Montserrat', sans-serif;">Contraseña actual:</label>
							<input type="password" name="actual" placeholder="Ingrese la contraseña actual..." required />
						</div>
						<br>
						<br>
						<div class="form-element">
							<label style="font-family: 'Montserrat', sans-serif;">Contraseña nueva:</label>
							<input type="password" name="contra" placeholder="Ingrese la contraseña actual..." required />
						</div>
						<br>
						<br>
						<div class="form-element">
							<label style="font-family: 'Montserrat', sans-serif;">Repita la contraseña nueva:</label>
							<input type="password" name="comp" placeholder="Ingrese la contraseña actual..." required />
						</div>
						<br>
						<br>
						<br>
						<input type="submit" name="insert" value="Guardar cambios" style="font-family: 'Montserrat', sans-serif;">
						<br>
						<br>
					</form>
				</div>
			</div>
		</div>
</div>
<?php
	} else {
?>
	<div style="margin-top: 8%;">
		<p>Aun no ha iniciado sesion</p>
		<a href="register.php">Registrase</a>
		<br>
		<br>
		<a href="log_in.php">Iniciar sesion</a>
	</div>
	<p style="font-size: 10px;">ah y se me olvidaba, al permanecer en la pag aceptan todas las cookies :)</p>
<?php
	}
?>
<?php if (isset($_SESSION['usuario'])) { ?>
	<script src="js/perfil.js"></script>
<?php } ?>
<?php if (isset($_GET['seccion'])) {
	if ($_GET['seccion'] == "buzon") { ?>
		<script type="text/javascript">
			buzon_aparecer();
		</script>
	<?php }
	if ($_GET['seccion'] == "usuario") { ?>
		<script type="text/javascript">
			usuarios_aparecer();
		</script>
<?php }
} ?>