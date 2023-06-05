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
    let data = `tipoDoc=${selTipoDoc.value}&numeroDoc=${txtNumeroDoc.value}&
                nombre=${txtNombre.value}&apellido=${txtApellido.value}&
                correo=${txtCorreo.value}&password=${txtPassword.value}&
                direccion=${txtDireccion.value}&telefono=${txtTelefono.value}&
                genero=${selGenero.value}&rol=${selRolUser.value}`;

    const opciones = {
        method: "POST",
        body: data,
    };
    fetch(url, opciones)
    .then((response) => response.json())
    .then((data) => {
        console.log(data);
    });
}

readRol();