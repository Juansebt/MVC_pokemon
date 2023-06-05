<?php include_once "header.php"; ?>
<!-- //Formulario -->
<form class="border rounded m-4 p-5" id="UsuarioFrm">
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="text-center">Formulario Usuarios</h1>
        </div>
    </div>
    <div class="row d-flex justify-content-center mx-5 mt-4 px-3">
        <div class="col-5">
            <label for="selTipoDoc" class="form-label">Tipo de documento:</label>
            <select class="form-select" name="selTipoDoc" id="selTipoDoc" aria-label="Default select example">
                <option value="" selected disabled>Seleccione...</option>
                <option value="TI">TI</option>
                <option value="CC">CC</option>
                <option value="NUIP">NUIP</option>
                <option value="DNI">DNI</option>
                <option value="CE">CE</option>
            </select>
        </div>
        <div class="col-5">
            <label for="txtNumeroDoc" class="form-label">Número de documento:</label>
            <input class="form-control" type="number" name="txtNumeroDoc" id="txtNumeroDoc">
        </div>
    </div>
    <div class="row d-flex justify-content-center mx-5 mt-4 px-3">
        <div class="col-5">
            <label class="form-label" for="txtNombre">Nombre:</label>
            <input class="form-control" type="text" name="txtNombre" id="txtNombre">
        </div>
        <div class="col-5">
            <label class="form-label" for="txtApellido">Apellido:</label>
            <input class="form-control" type="text" name="txtApellido" id="txtApellido">
        </div>
    </div>
    <div class="row d-flex justify-content-center mx-5 mt-4 px-3">
        <div class="col-5">
            <label class="form-label" for="txtCorreo">Correo:</label>
            <input class="form-control" type="email" name="txtCorreo" id="txtCorreo">
        </div>
        <div class="col-5">
            <label class="form-label" for="txtPassword">Contraseña:</label>
            <input class="form-control" type="password" name="txtPassword" id="txtPassword">
        </div>
    </div>
    <div class="row d-flex justify-content-center mx-5 mt-4 px-3">
        <div class="col-5">
            <label class="form-label" for="txtDireccion">Dirrección:</label>
            <input class="form-control" type="text" name="txtDireccion" id="txtDireccion">
        </div>
        <div class="col-5">
            <label class="form-label" for="txtTelefono">Teléfono:</label>
            <input class="form-control" type="tel" name="txtTelefono" id="txtTelefono">
        </div>
    </div>
    <div class="row d-flex justify-content-center mx-5 mt-4 px-3">
        <div class="col-5">
            <label class="form-label" for="selGenero">Genero:</label>
            <select class="form-select" name="selGenero" id="selGenero" aria-label="Default select example">
                <option value="" selected disabled>Seleccione...</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
            </select>
        </div>
        <div class="col-5">
            <label class="form-label" for="selRolUser">Rol en el sistema:</label>
            <select class="form-select" name="selRolUser" id="selRolUser" aria-label="Default select example">
                <!-- Campo para los options de los roles -->
            </select>
        </div>
        <div class="col-3 align-self-end mt-4" style="margin-left: 92%;">
            <!-- <input onclick="create()" class="btn btn-outline-primary" type="button" value="Registrar"> -->
            <a onclick="create()" class="btn btn-outline-primary" type="button" value="Registrar"><i class="fa-solid fa-plus"></i> Registrar</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-self-center">
    <h2 class="mt-5 mb-5 text-center">Usuarios</h2>
        <div class="col-12 table-responsive">
            <table class="table table-hover table-bordered text-center" id="tableUser">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col" width="20%">Nombre</th>
                        <th scope="col" width="15%">Correo</th>
                        <th scope="col" width="10%">Genero</th>
                        <th scope="col" width="15%">Rol</th>
                        <th scope="col" width="15%">Estado</th>
                        <th scope="col" width="15%">Opciones</th>
                    </tr>
                </thead>
                <tbody id="tblUsuarios">
                </tbody>
                <!-- <tfoot>
                    <tr>
                        <td colspan="4">By: Juan Sebastián Laguna Yara</td>
                    </tr>
                </tfoot> -->
            </table>
        </div>
    </div>
</form>
<!-- // Fin formulario -->
<?php include_once "footer.php"; ?>
<script src="./assets/js/usuarios.js"></script>