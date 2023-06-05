<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icono -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
    <!-- bootstrap -->
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="./assets/js/bootstrap.js"></script>
    <!-- javascript -->
    <script src="./assets/js/login.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <label class="form-label" for="txtCorreo" class="form-label">Correo:</label>
                <input type="text" name="txtCorreo" id="txtCorreo" class="form-control">
            </div>
            <div class="col-12">
                <label class="form-label" for="txtPassword" class="form-label">Contraseña:</label>
                <input type="text" name="txtPassword" id="txtPassword" class="form-control">
            </div>
            <div class="col-12">
                <a onclick="login()" class="btn btn-outline-primary">Iniciar</a>
            </div>
        </div>
    </div>
</body>
</html>