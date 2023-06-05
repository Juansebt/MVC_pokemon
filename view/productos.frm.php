<?php include_once "header.php"; ?>
<!-- //Formulario -->
<form class="border rounded m-4 p-5" id="productosFrm">
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="text-center">Formulario Productos</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center mx-5 px-3">
        <div class="col-10 mt-4">
            <label class="form-label" for="txtNombrePro">Nombre del producto:</label>
            <input class="form-control" type="text" id="txtNombrePro" name="txtNombrePro">
        </div>
        <div class="col-10 mt-4">
            <label class="form-label" for="txtPrecioPro">Precio del producto:</label>
            <input class="form-control" type="number" id="txtPrecioPro" name="txtPrecioPro">
        </div>
        <div class="col-10 mt-4">
            <label class="form-label" for="txtCantidadPro">Cantidad del producto:</label>
            <input class="form-control" type="number" id="txtCantidadPro" name="txtCantidadPro">
        </div>
        <div class="col-10 mt-4">
            <label class="form-label" for="txtDescripPro">Descripción del producto:</label>
            <textarea class="form-control" name="txtDescripPro" id="txtDescripPro" cols="30" rows="5"></textarea>
        </div>
        <div class="col-3 align-self-end mt-5" style="margin-left: 80%;">
            <!-- <input onclick="create()" class="btn btn-outline-primary" type="button" value="Registrar"> -->
            <a onclick="create()" class="btn btn-outline-primary" type="button" value="Registrar"><i class="fa-solid fa-plus"></i> Registrar</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-self-center">
        <h2 class="mt-5 mb-5 text-center">Productos</h2>
        <div class="col-12 table-responsive">
            <table class="table table-hover table-bordered text-center" id="tableProduct">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="20%">Producto</th>
                        <th scope="col" width="10%">Precio</th>
                        <th scope="col" width="5%">Cantidad</th>
                        <th scope="col" width="20%">Descripción</th>
                        <th scope="col" width="15%">Estado</th>
                        <th scope="col" width="15%">Opciones</th>
                    </tr>
                </thead>
                <tbody id="tblProductos">
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <td colspan="4">By: Juan Sebastián Laguna Yara</td>
                    </tr>
                </tfoot> -->
            </table>
        </div>
    </div>
    <!-- <a onclick="actualizarEstado()" class="btn btn-outline-primary" href="#">Estado</a> -->
    <div class="row">
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal">
            Launch demo modal
        </button> -->

        <!-- Modal Update-->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModallLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-gradient bg-warning">
                        <h1 class="modal-title fs-5 col-11 text-center ms-4 fw-bold text-white" id="updateModalLabel">Modificar Producto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <label class="form-label" for="txtNombreProUpdate">Nombre del producto:</label>
                                <input class="form-control" type="text" id="txtNombreProUpdate" name="txtNombreProUpdate">
                            </div>
                            <div class="col-10 mt-4">
                                <label class="form-label" for="txtPrecioProUpdate">Precio del producto:</label>
                                <input class="form-control" type="number" id="txtPrecioProUpdate" name="txtPrecioProUpdate">
                            </div>
                            <div class="col-10 mt-4">
                                <label class="form-label" for="txtCantidadProUpdate">Cantidad del producto:</label>
                                <input class="form-control" type="number" id="txtCantidadProUpdate" name="txtCantidadProUpdate">
                            </div>
                            <div class="col-10 mt-4">
                                <label class="form-label" for="txtDescripcionProUpdate">Descripción del producto:</label>
                                <textarea class="form-control" name="txtDescripcionProUpdate" id="txtDescripcionProUpdate" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> -->
                        <button onclick="update()" type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">Modificar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Launch demo modal
        </button> -->
        <!-- Modal Delete-->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModallLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-gradient bg-danger">
                        <h1 class="modal-title fs-5 col-11 text-center fw-bold text-white ms-4" id="deleteModalLabel">Eliminar Producto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <h4 id="textDelete"></h4>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                        <button onclick="deletes()" type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- // Fin formulario -->
<?php include_once "footer.php"; ?>
<script src="./assets/js/productos.js"></script>