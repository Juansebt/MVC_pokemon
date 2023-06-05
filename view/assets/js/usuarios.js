function readRol() {
    let url = "../controller/roles.read.php";

    fetch(url)
    .then((response) => response.json())
    .then((data) => {
        // console.log(data);
        let opciones = "";
        opciones += `<option value="" selected disabled>Seleccione...</option>`;
        data.forEach((element) => {
            opciones += `<option value="${element.id}">${element.nombreRol}</option>`;
        });
        selRolUser.innerHTML = opciones;
    });
}

function create() {
    let url = "../controller/usuarios.create.php";
    let data = `tipoDoc=${selTipoDoc.value}&numeroDoc=${txtNumeroDoc.value}&nombre=${txtNombre.value}&apellido=${txtApellido.value}&correo=${txtCorreo.value}&password=${txtPassword.value}&direccion=${txtDireccion.value}&telefono=${txtTelefono.value}&genero=${selGenero.value}&rol=${selRolUser.value}`;

    const opciones = {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: data,
    };
    fetch(url, opciones)
    .then((response) => response.json())
    .then((data) => {
        // console.log(data);
        alertify.success(data);
        eliminarRegistro();
    });
}

function read() {
    let url = "../controller/usuarios.read.php";

    fetch(url)
    .then((response) => response.json())
    .then((data) => {
        console.log(data);
        let tabla = "";
        data.forEach((element, index) => {
            tabla += `<tr>`;
            tabla += `<th scope="row">${index + 1}</th>`;
            tabla += `<td>${element.nombre} ${element.apellido}</td>`;
            tabla += `<td>${element.correo}</td>`;
            tabla += `<td>${element.genero}</td>`;
            tabla += `<td>${element.nombreRol}</td>`;
            tabla += `<td>
                        <div class="form-check form-switch d-flex justify-content-center">
                            <input onclick="estadoRol('${element.estado}','${element.id}')" class="form-check-input" type="checkbox" id="switch+=${element.nombre}" style="border-color: springgreen; background-color: springgreen;">
                            <label class="form-check-label px-2" for="flexSwitchCheckDefault">${element.estado == 'A' ? 'Activo' : 'Inactivo'}</label>
                        </div>
                    </td>`;
            tabla += `<td>
                        <a onclick="estadoUpdate(${element.id})" data-bs-toggle="modal" data-bs-target="#updateModal" title="Modificar" class="btn btn-outline-warning">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a onclick="estadoDelete(${element.id},'${element.nombre}')" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Eliminar" class="btn btn-outline-danger">
                            <i class="fa fa-trash px-1"></i>
                        </a>
                        <a data-bs-toggle="modal" data-bs-target="#viewInfoModal" title="Ver información" class="btn btn-outline-primary">
                            <i class="fa fa-solid fa-info px-1"></i>
                        </a>
                    </td>`;
            tabla += `</tr>`;
        });
        document.getElementById("tblUsuarios").innerHTML = tabla;
    })
}

read();

readRol();

function eliminarRegistro() {
    let formulario = document.getElementById("UsuarioFrm");

    // Recorre todos los elementos del formulario
    for (let i = 0; i < formulario.elements.length; i++) {
        let elemento = formulario.elements[i];

        // Verifica si el elemento es un campo de texto, área de texto o un campo de contraseña
        if (elemento.type === "text" || elemento.type === "tel" || elemento.type === "password" || elemento.type === 'email' || elemento.type === 'number') {
            elemento.value = ""; // Limpia el valor del campo
        } else if (elemento.tagName === "SELECT") {
            elemento.selectedIndex = 0; // Establece el índice seleccionado en 0 para reiniciar el select
        }
    }
}