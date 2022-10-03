<div class="container-xxl bg-white p-0">
	<div class="container-xxl py-5" style="padding:0;">
		<div class="container px-lg-5">
			<div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
				<h1 class="mb-3">¡Dona por un mundo mejor!</h1>
				<p class="mb-1">Hay muchas formas de salvar el planeta, y siempre una ayuda desinteresada de colaborar, es donando dinero, pero para que no te quedes con la duda de en que estas ayudando, hicimos un articulo especial para dar a entender nuestros objetivos:<br><a href="https://google.com.ar">Leer mas</a></p>
				<p style="color:green; font-size:40px;"><br>¡Estoy interesado!</p>
				<p class="mb-1">Dona y conviertete en un Birdly</p><br>
				<form style="display:grid; grid-template-rows: 1fr 1fr 1fr 1fr 1fr; grid-template-columns: 1fr 1fr 1fr 1fr 1fr;" action="" method="post">
					<input type="button" style="grid-column: 1/2; grid-row: 1/2; width:70%; font-family: 'Montserrat', sans-serif;" class="btn btn-outline-success" onclick="insertar_valor(100)" value="100 ARS">
					<input type="button" style="grid-column: 3/4; grid-row: 1/2; width:70%; font-family: 'Montserrat', sans-serif;" class="btn btn-outline-success" onclick="insertar_valor(200)" value="200 ARS">
					<input type="button" style="grid-column: 5/6; grid-row: 1/2; width:70%; font-family: 'Montserrat', sans-serif;" class="btn btn-outline-success" onclick="insertar_valor(300)" value="300 ARS">
					<input type="button" style="grid-column: 2/3; grid-row: 3/4; width:70%; font-family: 'Montserrat', sans-serif;" class="btn btn-outline-success" onclick="insertar_valor(400)" value="400 ARS">
					<input type="button" style="grid-column: 4/5; grid-row: 3/4; width:70%; font-family: 'Montserrat', sans-serif;" class="btn btn-outline-success" onclick="insertar_valor(500)" value="500 ARS">
					<p style="grid-column: 1/3; grid-row: 5/6;" id="si">El importe que seleccionó: -</p>
					<label style="grid-column: 3/4; grid-row:5/6;">Otro importe:ARS</label>
					<input type="text" name="selec" style="grid-column: 4/5; grid-row: 5/6; width:50%;" oninput="insertar_valor_personalizado()" id="donado">
					<input type="submit" class="btn btn-success" style="grid-column: 5/6; grid-row: 5/6; border:none; background-color:#7ebc12; width:70%; margin-right:30%; color:white;" value="Donar">
					<input type="text" hidden value="200" id="valor" name="valor">
				</form>
				<?php if (!isset($_SESSION['usuario'])) { ?>
					<div class="alert alert-danger" role="alert">
						<h4 class="alert-heading">Lo sentimos!</h4>
						<p>Para poder realizar una donación es necesario tener una cuenta registrada</p>
						<hr>
						<button type="button" class="btn btn-success"><a href="log_in.php" style="color:white;">Iniciar sesión</a></button>
					</div>
				<?php } ?>
				<?php
				if (isset($_GET['s']) && isset($_SESSION['usuario'])) { ?>
					<div style="width:100%; height:60%; border:solid; background-color:#7ebc12;" id="por">
						<br>
						<h2>Gracias por donar!!!</h2>
						<img src="img/don.gif">
					</div>
			</div>
		<?php } ?>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/donaciones.js"></script>