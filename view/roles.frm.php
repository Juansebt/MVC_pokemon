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
                        <th scope="col" width="10%" >Estado</th>
                        <th scope="col" width="10%" >Opciones</th>
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
</form>
<!-- // Fin formulario -->
<?php include_once "footer.php"; ?>
<script src="./assets/js/roles.js"></script>