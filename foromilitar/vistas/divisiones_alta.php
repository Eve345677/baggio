<link rel="stylesheet" href="css/divisionalta.css">
<div class="tabla2" style="color:black;">
    <form class="tabla1" action="divisiones_alta.php" method="POST" enctype="multipart/form-data">
        <div class="tabla3">
            <h1>INGRESE SU ARMA</h1>
            <br>
            <p>Nombre del arma:</p>
            <input type="text" name="nombre">
            <br>
            <br>
            <p>Tipo de arma:</p>
            <input type="text" name="tipo">
            <br>
            <br>
            <p>Nacionalidad del arma:</p>
            <input type="text" name="nacionalidad">
            <br>
            <br>
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example7">Informacion Adicional</label><br>
                <textarea class="form-control" id="form6Example7" rows="4" placeholder="agregue informacion del producto" name="info"></textarea>
            </div>
            <br>
            <br>
            <p>Precio del arma:</p>
            <input type="text" name="precio" required>
            <br>
            <br>
            <div class="mb-3">
                <label for="principal_img" class="form-label">subir imagen</label>
                <input class="form-control" type="file" name="principal_img" id="principal_img" accept=".jpg, .jpeg" required>
            </div>
            <br>
            <br>
            <?php
            if (!isset($_SESSION['usu'])) { ?>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalXl" onclick="mostrar()">
                    <i class="fas fa-file-arrow-up server me-3"></i>Subir
                </button>
            <?php } else { ?>
                <input type="submit" name="subir" value="subir" class="btn btn-light">
            <?php } ?>
            <br>
            <br>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="js/division_alta.js"></script>
    </form>
</div>