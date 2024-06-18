<?php

$categorias = CategoriasControlador::ctrMostrarCategorias(null, null);
#print_r($categorias);

$productos = ProductosControlador::ctrMostrarProductos(null,null);

?>

<div class="pc-container">
    <div class="pc-content">
        <div class="row">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-sm-auto">
                            <div class="page-header-title">
                                <h5 class="mb-0">Inicio</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../navigation/index.html"><i
                                            class="ph-duotone ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Inicio</a></li>
                                <li class="breadcrumb-item" aria-current="page">Inicio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- Main content -->
            <div class="col-md-12">
                <div class="card table-card latest-activity-card">
                    <div class="card-header">
                        <h5>Ultimos productos agregados</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>ID del producto</th>
                                        <th>Producto</th>
                                        <th>Categoria</th>
                                        <th>Cantidad</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <?php foreach ($productos as $value) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $value["nombre_producto"];?></td>
                                        <td><?php echo $value["id_producto"];?></td>
                                        <td><img src="<?php echo $url ?>vistas/assets/images/widget/PHONE1.jpg" alt=""
                                                class="img-fluid">
                                        </td>
                                        <td>nombre categoria</td>
                                        <td>stock que no puse</td>
                                        <td><?php echo $value["fecha_creacion_producto"];?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
