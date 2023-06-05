function login() {
    let data = `correo${txtCorreo.value}&password${txtPassword.value}`
    let url = "../controller/login.php" + data;

    // const options = {
    //     method: "GET",
    //     headers: {
    //         "Content-Type": "application/x-www-form-urlencoded",
    //     },
    //     body: data,
    // };

    fetch(url)
    .then((response) => response.json())
    .then((data) => {
        console.log(data);
    });
}