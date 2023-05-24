// Funciones CRUD para el formulario Roles
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
            console.log(data);
            read()
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
                tabla += `<td><a onclick="estadoUpdate(${element.id})" data-bs-toggle="modal" data-bs-target="#updateModal"><i class="fa fa-edit text-warning"></i></a> <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa fa-trash text-danger px-1"></i></a></td>`;
                tabla += `</tr>`;
            });
            document.getElementById("tblRol").innerHTML = tabla;
            actualizarEstado();
        });
}

function update() { }

function deletes() { }

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
        if(labelEstado[i].innerHTML == "Activo") {
            estados[i].setAttribute("checked", "");
        }
    }
}

function estadoUpdate(id) {
    let url = `../controller/roles.readid.php?id=${id}`;
    fetch(url)
    .then((response) => response.json())
    .then((data) => {
        console.log(data);
    });
}