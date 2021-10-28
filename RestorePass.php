<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restore</title>
    <link rel="shortcut icon" href="img/Renta-A-Cars.png">
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
    <div class="pt-lg-4 mt-lg-5 container align-content-center col-sm a col-sm-4">
        <form method="post" action="RestorePass_.php">
            <div class="mb-3">
                <h3 class="card-title">Recuperar Contraseña</h3>
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1">
                <div class="mb-3">
                    <label for="inputDui" class="form-label">Dui</label>
                    <input type="text" class="form-control" name="Dui" id="inputDui">
                </div>
                <div class="mb-3">
                    <label for="inputNPass" class="form-label">Nueva Contraseña</label>
                    <input type="password" class="form-control" name="newpass" id="inputNPass">
                </div>

                <button type="submit" class="btn btn-primary" name='Enviar' value="Enviar">Enviar</button>
                <div><br>
                    <label for="exampleInputEmail1" class="form-label">¿Ya tienes tu contraseña? Inicia sesion <a
                            href="Login.php">aqui</a></label>
                </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>