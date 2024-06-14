<?php

$usuarios = UsuariosControlador::ctrMostrarUsuarios(null, null);

$roles = RolesControlador::ctrMostrarRoles(null, null);

//print_r($roles);
?>

<body data-pc-preset="preset-1" data-pc-sidebar-theme="dark" data-pc-sidebar-caption="true" data-pc-direction="ltr"
  data-pc-theme="light">
  <section class="pc-container">
    <div class="pc-content">
    <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Usuarios</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../navigation/index.html"><i
                                        class="ph-duotone ph-house"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Inicio</a></li>
                            <li class="breadcrumb-item" aria-current="page">Usuarios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      <div class="col-sm-6">
        <h1>Usuarios</h1>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar-usuario">
          <i class="fas fa-plus"></i> Agregar usuario
        </button>

      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <table id="res-config" class="display table table-striped table-hover dt-responsive nowrap"
                style="width: 100%">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                  foreach ($usuarios as $key => $value) {

                    //$rol = RolesControlador::ctrMostrarRoles($value["idRolUsuario"]);
                  
                    ?>

                    <tr>
                      <td>
                        <?php echo $value["nombre_usuario"]; ?>
                      </td>
                      <td>
                        <?php echo $value["email_usuario"]; ?>
                      </td>
                      <td>
                      <?php

                        if ($value["id_rol_usuario"] == 1) {
                          echo "Administrador";
                        } if ($value["id_rol_usuario"] == 2){
                          echo "Vendedor";
                        }if($value["id_rol_usuario"] == 3){
                          echo "Empleado";
                        }
                        ?>
                      </td>
                      <td>
                        <?php

                        if ($value["estado_usuario"] == 1) {
                          echo "Activo";
                        } else {
                          echo "Inactivo";
                        }
                        ?>
                      </td>
                      <td><button type="button" class="btn btn-icon btn-light-warning"><i class="fas fa-user-edit"></i></button>
                      <button type="button" class="btn btn-icon btn-light-danger"><i class="fas fa-trash-alt"></i></button>
                    </td>
                    </tr>

                  <?php } ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- [Page Specific JS] start -->
    <!-- datatable Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/dataTables.responsive.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/responsive.bootstrap5.min.js"></script>
    <script>
      // [ Configuration Option ]
      $('#res-config').DataTable({
        responsive: true
      });

      // [ New Constructor ]
      var newcs = $('#new-cons').DataTable();

      new $.fn.dataTable.Responsive(newcs);

      // [ Immediately Show Hidden Details ]
      $('#show-hide-res').DataTable({
        responsive: {
          details: {
            display: $.fn.dataTable.Responsive.display.childRowImmediate,
            type: ''
          }
        }
      });
    </script>
    <!-- [Page Specific JS] end -->
</body>
<!-- [Body] end -->

</html>

<div class="modal fade" id="agregar-usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <form id="agregarUsuario" method="post">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre_usuario" class="form-control" placeholder="Ingrese el nombre del usuario">
          </div>

      
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email_usuario" class="form-control" placeholder="Ingrese el email del usuario">
          </div>

          
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password_usuario" class="form-control" placeholder="Ingrese la contraseña">
          </div>

          <div class="form-group">
            <label>Roles</label>
            <select class="form-control" name="id_rol_usuario">

              <option value="">Seleccione un rol</option>
              <?php foreach ($roles as $key => $value) { ?>

                <option value="<?php echo $value["id_rol"]; ?>"><?php echo $value["nombre_rol"]; ?></option>

              <?php } ?>
            </select>
          </div>
        </div>

        <?php
        $agregarUsuario = new UsuariosControlador();
        $agregarUsuario->ctrAgregarUsuario();
        ?>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="sumbit" class="btn btn-primary"> Guardar</button>
        </div>
      </div>
    </div>
  </form>
</div>