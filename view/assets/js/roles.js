// Funciones CRUD para el formulario Roles
var id;

function create() {
    let data = `txtRol=${document.getElementById("txtRol").value}`;
    let option = {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: data,
    };

    // let url = "../../../controller/roles.php" --> desde JS
    let url = "../controller/roles.create.php" //desde el formulario

    fetch(url, option)
        .then((response) => response.json())
        .then((data) => {
            // console.log(data);
            alertify.success(data);
            read();
            eliminarRegistro();
        })
        .catch((e) => {
            alertify.error(e);
        });
}

function read() {
    let url = "../controller/roles.read.php";
    fetch(url)
        .then(response => response.json())
        .then((data) => {
            // console.log(data);
            let tabla = "";
            data.forEach((element, index) => {
                tabla += `<tr>`;
                tabla += `<th scope="row">${index + 1}</th>`;
                tabla += `<td>${element.nombreRol}</td>`;
                tabla += `<td>
                            <div class="form-check form-switch d-flex justify-content-center">
                                <input onclick="estadoRol('${element.estado}','${element.id}')" class="form-check-input" type="checkbox" id="switch+=${element.nombreRol}" style="border-color: springgreen; background-color: springgreen;">
                                <label class="form-check-label px-2" for="flexSwitchCheckDefault">${element.estado == 'A' ? 'Activo' : 'Inactivo'}</label>
                            </div>
                        </td>`;
                tabla += `<td>
                            <a onclick="estadoUpdate(${element.id})" data-bs-toggle="modal" data-bs-target="#updateModal" title="Modificar" class="btn btn-outline-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a onclick="estadoDelete(${element.id},'${element.nombreRol}')" data-bs-toggle="modal" data-bs-target="#deleteModal" title="Eliminar" class="btn btn-outline-danger">
                                <i class="fa fa-trash px-1"></i>
                            </a>
                        </td>`;
                tabla += `</tr>`;
            });
            document.getElementById("tblRol").innerHTML = tabla;
            // alertify.warning("Roles cargados");
            actualizarEstado();
            let table = new DataTable('#table', {
                language: {
                    url: './assets/es-ES.json',
                },
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: "colvis",
                        text: '<i class="fa-solid fa-filter text-primary"></i>',
                        titleAttr: "Filtar",
                        className: "btn colvisDataTable",
                    },
                    {
                        extend: "excel",
                        text: '<i class="fa-solid fa-file-excel text-success"></i>',
                        titleAttr: "Excel",
                        exportOptions: {
                            columns: [0, 1, 2]
                        },
                        className: "btn excelDataTable",
                    },
                    {
                        extend: "pdf",
                        text: '<i class="fa-solid fa-file-pdf text-danger"></i>',
                        titleAttr: "PDF",
                        exportOptions: {
                            columns: [0, 1, 2]
                        },
                        className: "btn pdfDataTable",
                        download: "open",
                    },
                    {
                        extend: "print",
                        text: '<i class="fa-solid fa-print text-warning"></i>',
                        titleAttr: "Imprimir",
                        exportOptions: {
                            columns: [0, 1, 2]
                        },
                        className: "btn printDataTable",
                    },
                    {
                        extend: "copy",
                        text: '<i class="fa-solid fa-copy text-dark"></i>',
                        titleAttr: "Copiar",
                        exportOptions: {
                            columns: [0, 1, 2]
                        },
                        className: "btn copyDataTable",
                    },
                ]
            });
        });
}

function update() {
    let id = localStorage.id;
    let nombreRol = document.getElementById("txtRolUpdate").value;
    let data = `txtRol=${nombreRol}&id=${id}`;
    const options = {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: data,
    };
    let url = "../controller/roles.update.php";
    fetch(url, options)
        .then((response) => response.json())
        .then((data) => {
            // console.log(data);
            alertify.success(data);
            read();
            eliminarRegistro2(); //No funciona - corregir
        })
}

function deletes() {
    let url = "../controller/roles.detele.php";
    let data = `id=${this.id}`;

    let option = {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: data,
    };

    fetch(url, option)
        .then((response) => response.json())
        .then((data) => {
            // console.log(data);
            alertify.success(data);
            read();
        })
}

read();

function estadoRol(estado, id) {
    let data = `id=${id}&estado=${estado}`;

    let option = {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: data,
    };

    let url = "../controller/roles.estado.php";
    fetch(url, option)
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            read();
        });
}

function actualizarEstado() {
    let estados = document.getElementById("tblRol").getElementsByClassName("form-check-input");

    let labelEstado = document.getElementById("tblRol").getElementsByClassName("form-check-label");

    for (let i = 0; i < estados.length; i++) {
        if (labelEstado[i].innerHTML == "Activo") {
            estados[i].setAttribute("checked", "");
        }
    }
}

function estadoUpdate(id) {
    let url = `../controller/roles.readid.php?id=${id}`;
    fetch(url)
        .then((response) => response.json())
        .then((data) => {
            document.getElementById("txtRolUpdate").value = data[0].nombreRol;
            localStorage.id = data[0].id;
            limpiarCampoInput();
        });
}

function estadoDelete(id, nombreRol) {
    this.id = id;
    document.getElementById("textDelete").innerHTML = `¿Estás seguro de eliminar el rol: ${nombreRol}?`
}

function eliminarRegistro() {
    let formulario = document.getElementById("rolesFrm");

    // Recorre todos los elementos del formulario
    for (let i = 0; i < formulario.elements.length; i++) {
        let elemento = formulario.elements[i];

        // Verifica si el elemento es un campo de texto, área de texto o un campo de contraseña
        if (elemento.type === "text" || elemento.type === "textarea" || elemento.type === "password") {
            elemento.value = ""; // Limpia el valor del campo
        }
    }
}

function limpiarCampoInput() {
    let input = document.getElementById("txtRolUpdate");
    input.value = "";
  }
  