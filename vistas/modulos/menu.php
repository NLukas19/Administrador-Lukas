<nav class="pc-sidebar">
  <div class="navbar-wrapper">

    <div class="card pc-user-card">
      <div class="card-body">
        <div class="nav-user-image">
          <a data-bs-toggle="collapse" href="#navuserlink">
            <img src="<?php echo $url ?>vistas/assets/images/user/avatar-1.jpg" alt="user-image" class="user-avtar rounded-circle">
          </a>
        </div>
        <div class="pc-user-collpsed collapse" id="navuserlink">
          <h4 class="mb-0"><?php echo $_SESSION["nombre_usuario"]; ?></h4>
          <span>Administrador</span>
        </div>
      </div>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar" role="menu">
        <li class="pc-item pc-caption">
          <label>Menu</label>
        </li>
        <li class="pc-item">
          <a href="<?php echo $url; ?>" class="pc-link">
            <span class="pc-micon">
              <i class="fas fa-home"></i>
            </span>
            <span class="pc-mtext">Inicio</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="usuarios" class="pc-link">
            <span class="pc-micon">
              <i class="fas fa-user-friends"></i>
            </span>
            <span class="pc-mtext">Usuario</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="productos" class="pc-link">
            <span class="pc-micon">
              <i class="fas fa-boxes"></i>
            </span>
            <span class="pc-mtext">Productos</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="categorias" class="pc-link">
            <span class="pc-micon">
              <i class="fas fa-th-list"></i>
            </span>
            <span class="pc-mtext">Categorias</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="ordenes" class="pc-link">
            <span class="pc-micon">
              <i class="fas fa-dolly-flatbed"></i>
            </span>
            <span class="pc-mtext">Ordenes</span></a
            >
        </li>
        <li class="pc-item">
          <a href="salir" class="pc-link">
            <span class="pc-micon">
              <i class="fas fa-sign-out-alt"></i>
            </span>
            <span class="pc-mtext">Salir</span></a
            >
        </li>
      </ul>
    </div>
  </div>
</nav>