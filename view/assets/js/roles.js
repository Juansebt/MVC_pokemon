// Funciones CRUD para el formulario Roles
function create(){
    let data = `txtRol=${document.getElementById("txtRol").value}`;
    let option = {
        method: "POST",
        headers: {
            "Content-Type":"application/x-www-form-urlencoded",
        },
        body: data,
    };

    // let url = "../../../controller/roles.php" --> desde JS
    let url = "../controller/roles.create.php" //desde el formulario

    fetch(url, option)
    .then((response) => response.json())
    .then((data) => {
        console.log(data)
    });
}
function read(){}
function update(){}
function deletes(){}