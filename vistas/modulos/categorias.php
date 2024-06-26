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
                                <h5 class="mb-0">Categorias</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../navigation/index.html"><i
                                            class="ph-duotone ph-house"></i></a></li>
                                <li class="breadcrumb-item"><a href="<?php echo $url; ?>">Inicio</a></li>
                                <li class="breadcrumb-item" aria-current="page">Categorias</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="ecom-wrapper">
                    <div class="offcanvas-xxl offcanvas-start ecom-offcanvas" tabindex="-1" id="offcanvas_mail_filter">
                        <div class="offcanvas-body p-0 sticky-xxl-top">
                            <div id="ecom-filter" class="show collapse collapse-horizontal">
                                <div class="ecom-filter">
                                    <div class="card card-border-none">
                                        <div class="scroll-block">
                                            <div class="card-body">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item border-0 px-0 py-2">
                                                        <a class="btn border-0 px-0 text-start w-100"
                                                            data-bs-toggle="collapse" href="#filtercollapse2">
                                                            <div class="float-end">
                                                            </div>
                                                            Categorias
                                                        </a>
                                                        <div>
                                                            <?php foreach ($categorias as $value) { ?>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox">
                                                                    <label class="form-check-label">
                                                                        <?php echo $value["nombre_categoria"]; ?>
                                                                    </label>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ecom-content">
                        <div class="d-sm-flex align-items-center mb-4">
                            <ul class="list-inline me-auto my-1">
                                <li class="list-inline-item">
                                    <form class="form-search">
                                        <i class="ph-duotone ph-magnifying-glass icon-search"></i>
                                        <input type="search" class="form-control" placeholder="Buscar producto">
                                    </form>
                                </li>
                            </ul>
                            <ul class="list-inline ms-auto my-1">
                                <li class="list-inline-item align-bottom">
                                    <a href="#" class="d-none d-xxl-inline-flex btn btn-link-dark"
                                        data-bs-toggle="collapse" data-bs-target="#ecom-filter">
                                        <i class="ti ti-filter f-16"></i> Ocultar categorias
                                    </a>
                                </li>
                            </ul>
                        </div>
                    <div class="row">
                        <?php foreach ($productos as $value) { ?>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="card product-card card-border-none">
                                        <div class="card-img-top">

                                                <img src=<?php echo $value["imagen_producto"];?> alt="image"
                                                    class="img-prod img-fluid">
                                        </div>
                                        <div class="card-body">

                                                <p class="prod-content mb-0 text-muted"><?php echo $value["nombre_producto"];?></p>

                                            <div
                                                class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                                <h4 class="mb-0 text-truncate"><b><?php echo $value["precio_producto"];?></b>
                                                </h4>
                                                <div class="d-inline-flex align-items-center">
                                                    <i class="ph-duotone ph-star text-warning me-1"></i>
                                                    4.5 <small class="text-muted">/ 5</small>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-shrink-0">
                                                    <a href="#" class="avtar avtar-s btn-link-secondary btn-prod-card"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ph-duotone ph-eye f-18"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>


<div class="offcanvas offcanvas-end" tabindex="-1" id="productOffcanvas" aria-labelledby="productOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="productOffcanvasLabel">Detalles del producto</h5>
        <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas">
            <i class="ti ti-x f-20"></i>
        </a>
    </div>
    <div class="offcanvas-body">
        <div class="card product-card card-border-none shadow-none border-0">
            <div class="card-img-top p-0">
                
                    <img src=<?php echo $value["imagen_producto"];?> alt="image" class="img-prod img-fluid">
                
                <div class="card-body position-absolute end-0 top-0">
                    <div class="form-check prod-likes">
                        <input type="checkbox" class="form-check-input">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-heart prod-likes-icon">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <h5>Glitter gold Mesh Walking Shoes</h5>
        <p class="text-muted">Image Enlargement: After shooting, you can enlarge photographs of the objects for clear
            zoomed view. Change In Aspect Ratio: Boldly crop the subject and save it with a composition that has impact.
        </p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item px-0">
                <div class="d-inline-flex align-items-center justify-content-between w-100">
                    <p class="mb-0 text-muted me-1">Price</p>
                    <h4 class="mb-0"><b>$299.00</b><span
                            class="mx-2 f-14 text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                </div>
            </li>
            <li class="list-group-item px-0">
                <div class="d-inline-flex align-items-center justify-content-between w-100">
                    <p class="mb-0 text-muted me-1">Categories</p>
                    <h6 class="mb-0">Shoes</h6>
                </div>
            </li>
            <li class="list-group-item px-0">
                <div class="d-inline-flex align-items-center justify-content-between w-100">
                    <p class="mb-0 text-muted me-1">Status</p>
                    <h6 class="mb-0"><span class="badge bg-warning rounded-pill">Process</span></h6>
                </div>
            </li>
            <li class="list-group-item px-0">
                <div class="d-inline-flex align-items-center justify-content-between w-100">
                    <p class="mb-0 text-muted me-1">Brands</p>
                    <h6 class="mb-0"><img src="<?php echo $url ?>vistas/assets/images/application/img-prod-brand-1.png" alt="user-image"
                            class="wid-40"></h6>
                </div>
            </li>
        </ul>
    </div>
</div>