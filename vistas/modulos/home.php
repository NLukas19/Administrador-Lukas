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
                        <h5>Historial de ordenes</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th>Tienda</th>
                                        <th>ID de la orden</th>
                                        <th>Producto</th>
                                        <th>Nombre del producto</th>
                                        <th>Cantidad</th>
                                        <th>Fecha</th>
                                        <th>Estatus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MusiMundo</td>
                                        <td>#81412314</td>
                                        <td><img src="<?php echo $url ?>vistas/assets/images/widget/PHONE1.jpg" alt=""
                                                class="img-fluid">
                                        </td>
                                        <td>Moto G5</td>
                                        <td>10</td>
                                        <td>17-2-2017</td>
                                        <td><label class="badge bg-light-warning">Pendiente de pago</label></td>
                                    </tr>
                                    <tr>
                                        <td>ElectroMecanicaJose</td>
                                        <td>#68457898</td>
                                        <td><img src="<?php echo $url ?>vistas/assets/images/widget/PHONE2.jpg" alt=""
                                                class="img-fluid">
                                        </td>
                                        <td>iPhone 8</td>
                                        <td>16</td>
                                        <td>20-2-2017</td>
                                        <td><label class="badge bg-light-primary">Enviado</label></td>
                                    </tr>
                                    <tr>
                                        <td>Centrogar</td>
                                        <td>#45457898</td>
                                        <td><img src="<?php echo $url ?>vistas/assets/images/widget/PHONE3.jpg" alt=""
                                                class="img-fluid">
                                        </td>
                                        <td>Redmi 4</td>
                                        <td>20</td>
                                        <td>17-2-2017</td>
                                        <td><label class="badge bg-light-success">Pagado</label></td>
                                    </tr>
                                    <tr>
                                        <td>RespuestoLosHermanos</td>
                                        <td>#62446232</td>
                                        <td><img src="<?php echo $url ?>vistas/assets/images/widget/PHONE4.jpg" alt=""
                                                class="img-fluid">
                                        </td>
                                        <td>Jio</td>
                                        <td>15</td>
                                        <td>25-4-2017</td>
                                        <td><label class="badge bg-light-danger">Cancelado</label></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="text-end  m-r-20">
                            <a href="ordenes" class="b-b-primary text-primary">Ver todas las ordenes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>