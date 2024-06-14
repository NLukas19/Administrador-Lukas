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



              <p class="mb-1">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#renovar">Renovar contraseña</a>
              </p>

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

<div class="modal fade" id="renovar">

    <form id="agregarProducto" method="post">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title">Renovar contraseña</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="resetPassword" class="form-control" placeholder="Ingrese el email" required>
                    </div>

                </div>

                <?php
                $renovar = new UsuariosControlador();
                $renovar->ctrRenovarPassword();
                ?>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close"> Cerrar</button>
                    <button type="sumbit" class="btn btn-primary"><i class="fas fa-save"></i> Enviar</button>
                  </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->

  </form>
</div>
