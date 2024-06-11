<?php

$categorias = CategoriasControlador::ctrMostrarCategorias(null, null);
#print_r($categorias);

?>

<section class="pc-container">
            <?php
                $producto = ProductosControlador::ctrMostrarProductos("id_producto", $_GET["id_producto"]);
            ?>
    <div class="pc-content">
        <form id="editarProducto" method="post">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="demo-text-input" class="form-label">Nombre del producto</label>
                            <input class="form-control nombre_producto" type="text" name="editar_nombre_producto"
                                value="<?php echo $producto["nombre_producto"]; ?>"
                                placeholder="Ingrese el nuevo nombre de su producto">
                        </div>
                        <div class="form-group">
                            <label>Categoría</label>
                            <select class="form-control" name="editar_categoria_producto" id="categoria">

                                <option value="">Seleccione un elemento de la lista</option>
                                <?php foreach ($categorias as $key => $value) { ?>

                                <option <?php if ($producto["categoria_producto"] == $value["id_categoria"]) { ?>
                                    selected <?php } ?> value="<?php echo $value["id_categoria"]; ?>">
                                    <?php echo $value["nombre_categoria"]; ?>
                                </option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="demo-number-input" class="form-label">Precio del producto</label>
                            <input class="form-control precio_producto" type="number" name="editar_precio_producto"
                                value="<?php echo $producto["precio_producto"]; ?>"
                                placeholder="Ingrese el nuevo precio del producto">
                        </div>
                        <div class="form-group">
                            <label for="demo-input-file" class="form-label">Imagen del producto</label>
                            <input class="form-control" type="file" id="subirImagen" name="editar_imagen_producto">
                            <img width="100" class="previsualizarImagen" src="" alt="">
                        </div>
                    </div>

                    <input type="hidden" class="editar_id_producto" name="editar_id_producto"
                        value="<?php echo $producto["id_producto"]; ?>">

                    <?php
                    $editar = new ProductosControlador();
                    $editar->ctrEditarProducto();
                    ?>

                    <div class="modal-footer">
                        <button type="sumbit" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="sumbit" class="btn btn-primary"> Guardar</button>
                    </div>

                </div>
            </div>

        </form>
    </div>
</section>