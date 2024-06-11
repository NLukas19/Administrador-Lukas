<body data-pc-preset="preset-1"  data-pc-direction="ltr" >
  <form method="post">
    <div class="auth-main v1">
      <div class="auth-wrapper">
        <div class="auth-form">
          <div class="card mb-5 mt-3">
            <div class="card-header bg-dark">
              <h4 class="text-center text-white f-w-500 mb-0">Ingreso a la administracion</h4>
            </div>
            <div class="row">
              <div class="col-12">
                  <?php
                  $login = new UsuariosControlador();
                  $login->ctrIngresoUsuario()
                  ?>
              </div>
          </div>
            <div class="card-body">
              <div class="form-group mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email_usuario" placeholder="Email">
              </div>
              <div class="form-group mb-3">
                <input type="password" class="form-control" id="floatingInput1" name="password_usuario" placeholder="Contraseña" required>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
