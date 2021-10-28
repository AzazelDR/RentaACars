<!DOCTYPE html>
<html>

<head>
<title>Sign In</title>
    <link rel="shortcut icon" href="img/Renta-A-Cars.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container-fluid">
        <h4><img src="img/Renta-A-Cars-Lg.png" class="img-fluid rounded-circle"
                style="height: 50px;"> Renta A Cars</h4>
         
    </div>
    </nav>

    <div class="pt-lg-4 mt-lg-5 container align-content-center col-sm col-sm-4">
        <form class="row gy-0 gx-2 needs-validation" method="post" action="Signin_.php">
            <h3 class="card-title">Registro</h3>
            <div class="col-12">
                <label for="inputName" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" name="fullname" id="inputName" required>
            </div>
            <div class="col-md-6">
                <label for="inputMail" class="form-label">Correo</label>
                <input type="email" class="form-control" name="email" id="inputMail" required>
            </div>
            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="inputPassword" required>
            </div>
            <div class="col-md-6">
                <label for="inputDui" class="form-label">Dui</label>
                <input type="text" class="form-control" id="inputDui" name="dui" required>
            </div>
            <div class="col-md-6">
                <label for="inputNit" class="form-label">Nit</label>
                <input type="text" class="form-control" id="inputNit" name="nit" required>
            </div>
            <div class="col-md-8">
                <label for="inputTel" class="form-label">Telefono</label>
                <input type="text" class="form-control" name="Contacto" id="inputTel" required>
            </div>
            <div class="col-md-4">
                <label for="inputAge" class="form-label">Edad</label>
                <input type="text" class="form-control" id="inputAge" name="edad" required>
            </div>
            <div class="mb-3">
                <label for="textAreaAddress" class="form-label">Direccion</label>
                <textarea class="form-control" id="textAreaAddress" name="Direccion" rows="3" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" value="ingresar" name="registro">Registrarse</button>
            </div>
            <div>
                <label for="exampleInputEmail1" class="form-label">¿Ya tienes cuenta? Inicia sesion <a
                        href="Login.php">aqui</a></label>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>