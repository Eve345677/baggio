<div class="container-xxl position-relative p-0">

<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
      <a href="index.php" class="navbar-brand p-0">
        <h1 class="m-0"><i class="fas fa-crow server me-3"></i>Two Birds  <i class="fas fa-dove server me-3 fa-flip-horizontal"></i></h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="forum.php" class="nav-item nav-link">Foro</a>
          


          <a href="donations.php" class="nav-item nav-link">Como colaborar</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Usuario</a>
            <div class="dropdown-menu m-0">
              <?php if (isset($_SESSION['usuario'])) { ?>
                <a href="my_profile.php" class="dropdown-item">Mi Perfil</a>
                <a href="logout.php" class="dropdown-item">Log out</a>
              <?php } ?>
              <?php if (!isset($_SESSION['usuario'])) { ?>
                <a href="log_in.php" class="dropdown-item">Log in</a>
                <a href="register.php" class="dropdown-item">Register</a>
              <?php } ?>
            </div>
          </div>

        </div>
        <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        <?php if (!isset($_SESSION['usuario'])) { ?>
          <a href="log_in.php" class="btn btn-secondary py-2 px-4 ms-3">login</a>
        <?php }
        if (isset($_SESSION['usuario'])) { ?>
          <a href="logout.php" class="btn btn-secondary py-2 px-4 ms-3">logout</a>
        <?php } ?>
      </div>
    </nav>
    <div class="modal fade" id="searchModal" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
          <div class="modal-header border-0">
            <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body d-flex align-items-center justify-content-center">
            <form action="forum.php" method="get" class="input-group" style="max-width: 600px;">
              <input name="busqueda" type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
              <button type="submit" class="btn btn-light px-4"><i class="bi bi-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
 