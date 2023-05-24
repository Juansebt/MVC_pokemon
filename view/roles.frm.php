<?php include_once "header.php"; ?>
<!-- //Formulario -->
<form class="border rounded m-4 p-5" id="rolesFrm">
    <div class="row my-5">
        <div class="col-12">
            <h1 class="text-center">Formulario Roles</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-end">
        <div class="col-6">
            <label class="form-label" for="txtRol">Nombre del rol:</label>
            <input class="form-control" type="text" id="txtRol" name="txtRol">
        </div>
        <div class="col-3 align-self-end">
            <input onclick="create()" class="btn btn-outline-primary" type="button" value="Registrar">
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <h2 class="mt-5 mb-5 text-center">Roles</h2>
        <div class="col-8">
            <table class="table table-hover table-bordered text-center">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col" width="10%">#</th>
                        <th scope="col" width="25%">Roles</th>
                        <th scope="col" width="10%">Estado</th>
                        <th scope="col" width="10%">Opciones</th>
                    </tr>
                </thead>
                <tbody id="tblRol">
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">By: Juan Sebastián Laguna Yara</td>
                    </tr>
                </tfoot>
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
                        <h1 class="modal-title fs-5 col-11 text-center ms-4 fw-bold text-white" id="updateModalLabel">Modificar Rol</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <label class="form-label" for="txtRolUpdate">Nombre del rol:</label>
                                <input class="form-control" type="text" id="txtRolUpdate" name="txtRolUpdate">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-warning text-white" data-bs-dismiss="modal">Modificar</button>
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
                        <h1 class="modal-title fs-5 col-11 text-center ms-4" id="deleteModalLabel">Eliminar Rol</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- // Fin formulario -->
<?php include_once "footer.php"; ?>
<script src="./assets/js/roles.js"></script>