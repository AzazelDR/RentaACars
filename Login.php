<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="shortcut icon" href="img/Renta-A-Cars.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <h4><img src="img/Renta-A-Cars-Lg.png" class="img-fluid rounded-circle"
                style="height: 50px;"> Renta A Cars</h4>
         
    </div>
    </nav>

    <div class="pt-lg-5 mt-lg-5 container align-content-center col-sm col-sm-4 ">
        <form method="post" action="Login_.php">
            <div class="mb-3">
                <h3 class="card-title">Iniciar sesión</h3>
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nunca compartiremos tu correo con nadie.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary" value="ingresar">Entrar</button>
        </form><br>
        <label for="exampleInputEmail1" class="form-label">¿Olvidaste tu clave? Recuperala <a
                href="RestorePass.php">aqui</a></label> <br>
        <label for="exampleInputEmail1" class="form-label">¿Aun no tienes cuenta? Registrate <a
                href="Signin.php">aqui</a></label>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>