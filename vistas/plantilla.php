<?php
session_start();
$url = PlantillaControlador::url();
?>

<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>Administracion Lukas</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Flat Able is trending dashboard template made using Bootstrap 5 design framework. Flat Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="phoenixcoded">
   
    <!-- [Favicon] icon -->
    <link rel="icon" href="<?php echo $url ?>vistas/assets/images/favicon.svg" type="image/x-icon">
    <!-- [Google Font : Public Sans] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/fonts/tabler-icons.min.css">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/fonts/feather.css">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/css/style.css" id="main-style-link">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/css/style-preset.css">
    <link rel="icon" href="<?php echo $url ?>vistas/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/css/plugins/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/css/plugins/responsive.bootstrap5.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url ?>vistas/assets/fonts/material.css" >
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo $url ?>vistas/assets/js/scripts.js"></script>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <?php if (!isset($_SESSION["session"])) { ?>
        <?php } ?>
        
        <div class="loader-bg">
            <div class="pc-loader">
                <div class="loader-fill"></div>
            </div>
        </div>
        
        <div class="navbar-wrapper">
            <?php if (isset($_SESSION["session"]) && $_SESSION["session"] == "ok") { ?>
                
                <?php include 'vistas/modulos/header.php'; ?>
                <?php include 'vistas/modulos/menu.php'; ?>
                
                <!-- Content Wrapper. Contains page content -->
                <?php

if (isset($_GET["pagina"])) // entra si es verdadero
{
    
    $paginas = explode("/", $_GET["pagina"]);
    //print_r($paginas);
    
    if (
        $paginas[0] == "home" ||
        $paginas[0] == "productos" ||
        $paginas[0] == "editar-producto" ||
        $paginas[0] == "usuarios" ||
        $paginas[0] == "categorias" ||
        $paginas[0] == "ordenes" ||
        $paginas[0] == "salir"
        ) {
            include "vistas/modulos/" . $paginas[0] . ".php";
        } else {
            include "vistas/modulos/404.php";
        }
    } else {
        include "vistas/modulos/home.php";
    }
    
    ?>
            <?php
            //include 'vistas/modulos/modals.php';
            include 'vistas/modulos/footer.php';
            ?>
        <?php } else {
            include 'vistas/modulos/login.php';
        } ?>
    </div>
    
    
    
    <!-- Required Js -->
    <script src="<?php echo $url ?>vistas/assets/js/plugins/popper.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/simplebar.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/fonts/custom-font.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/pcoded.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/dataTables.responsive.min.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/plugins/responsive.bootstrap5.min.js"></script>

    
    
    <script src="<?php echo $url ?>vistas/assets/js/productos.js"></script>
    <script src="<?php echo $url ?>vistas/assets/js/usuarios.js"></script>
    
    
    
    
    <script>layout_change('light');</script>
    
    
    
    <script>layout_sidebar_change('dark');</script>
    
    
    
    
    <script>layout_header_change('dark');</script>
    
    
    
    
    
    <script>change_box_container('false');</script>
    
    
    <script>layout_caption_change('true');</script>
    
    
    
    
    <script>layout_rtl_change('false');</script>
    
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        </script>

<script>
    $(function () {
        
        $('#agregarProducto').validate({
            rules: {
                nombre_producto: {
                    required: true,
                    minlength: 3
                },
                categoria_producto: {
                    required: true,
                },
                precio_producto: {
                    required: true
                },
            },
            messages: {
                nombre_producto: {
                    required: "Ingrese un nombre",
                    minlength: "El nombre del producto debe tener más de 3 caracteres"
                },
                categoria_producto: {
                    required: "Seleccione una categoría",
                },
                precio_producto: "Ingrese un precio"
            },
            errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>


</body>
<!-- [Body] end -->

</html>