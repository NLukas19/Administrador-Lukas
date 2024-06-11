<?php

$categorias = CategoriasControlador::ctrMostrarCategorias(null, null);
#print_r($categorias);

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
                            <h5 class="mb-0">productos</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../navigation/index.html"><i
                                        class="ph-duotone ph-house"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Inicio</a></li>
                            <li class="breadcrumb-item" aria-current="page">productos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-sm-6 productos">
                <h1>Productos</h1>

                <button type="button" class="btn btn-primary btnBoton" data-bs-toggle="modal" data-bs-target="#agregar-producto" tipo="nuevo">
                    <i class="fas fa-plus"></i> Agregar producto
                </button>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" id="url" value="<?php echo $url; ?>">
                            <table id="res-config"
                                class="display table table-striped table-hover dt-responsive nowrap tablaProductos"
                                style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- [Page Specific JS] start -->
    <!-- datatable Js -->
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

<div class="modal fade" id="agregar-producto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form id="agregarProducto" method="post" enctype="multipart/form-data">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h4 class="modal-title">Agregar producto</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nombre producto</label>
                        <input type="text" name="nombre_producto" class="form-control"
                            placeholder="Ingrese el nombre del producto" required>
                    </div>

                    <div class="form-group">
                        <label>Categoría</label>
                        <select class="form-control" name="categoria_producto">

                            <option value="">Seleccione un elemento de la lista</option>
                            <?php foreach ($categorias as $key => $value) { ?>

                            <option value="<?php echo $value["id_categoria"]; ?>">
                                <?php echo $value["nombre_categoria"]; ?>
                            </option>

                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" name="precio_producto" class="form-control"
                            placeholder="Ingrese el precio del producto">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Imagen</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="subirImagen" name="imagen_producto">
                                <label class="custom-file-label" for="exampleInputFile">Seleccione una imagen</label>
                            </div>
                        </div>
                        <img width="100" class="previsualizarImagen" src="" alt="">
                    </div>

                </div>

                <?php
                $agregar = new ProductosControlador();
                $agregar->ctrAgregarProducto();
                ?>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</butto>
                        <button type="sumbit" class="btn btn-primary"> Guardar</button>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
    </form>
</div>

<?php
$eliminar = new ProductosControlador();
$eliminar->ctrEliminarProducto();
?>