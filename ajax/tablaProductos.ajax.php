<?php

require_once '../controladores/productos.controlador.php';
require_once '../modelos/productos.modelo.php';
require_once '../controladores/categorias.controlador.php';
require_once '../modelos/categorias.modelo.php';

class TablaProductos
{
    /*========================
    MOSTRAR TABLA DE PRODUCTOS
    =============================================*/

    public function mostrarTablaProductos()
    {
        $productos = ProductosControlador::ctrMostrarProductos(null, null);

        //print_r(count($productos));

        if (count($productos) == 0) {

            echo '{"data": []}';

            return;
        }

        $datosJson = '{"data" : [';

        for ($i = 0; $i < count($productos); $i++) {
            if ($productos[$i]["estado_producto"] == 1) {
                $estado = "<span class='badge rounded-pill bg-primary'>Activo</span>";
            } else {
                $estado = "<span class='badge rounded-pill bg-danger'>Inactivo</span>";
            }
            $categoria = CategoriasControlador::ctrMostrarCategorias("id_categoria", $productos[$i]["categoria_producto"]);
            $imagen =  "<img src= '".substr($productos[$i]['imagen_producto'],2)."'>";
            //Traemos las acciones
            $acciones = "<a type='button' class='btn btn-icon btn-light-warning btnBoton'  href = 'index.php?pagina=editar-producto&id_producto=" . $productos[$i]["id_producto"] . "' ><i class='fas fa-pen'></i></a> <button type='button' id_producto = '" . $productos[$i]["id_producto"] . "' class='btn btn-icon btn-light-danger btnEliminarProducto'><i class='fas fa-trash-alt'></i></button>";
           /*  $acciones = "<button type='button' class='btn bg-gradient-warning btnBoton' tipo = 'editar' id_producto = '" . $productos[$i]["id_producto"] . "'  data-toggle='modal' data-target='#editar-producto'><i class='fas fa-edit'></i></button> <button type='button' id_producto = '" . $productos[$i]["id_producto"] . "' class='btn bg-gradient-danger btnEliminarProducto'><i class='fas fa-trash'></i></button>"; */

            $datosJson .= '[
                        "' . $imagen . '",
                        "' . $productos[$i]["nombre_producto"] . '",
                        "' . $productos[$i]["precio_producto"] . '",
                        "' . $categoria["nombre_categoria"].'",
                        "' . $estado . '",
                        "' . $acciones . '"
                    ],';
        }
        $datosJson = substr($datosJson, 0, -1);

        $datosJson .= ']
        }';

        echo $datosJson;
    }
}

/*========================
    ACTIVAR TABLA DE PRODUCTOS
    =============================================*/
$activarproductos = new TablaProductos();
$activarproductos->mostrarTablaProductos();
