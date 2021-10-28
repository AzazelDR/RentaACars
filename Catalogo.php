<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Catalogo</title>
    <link rel="shortcut icon" href="img/Renta-A-Cars.png">
</head>

<body class="bg-dark text-white">


    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand " href="#"><img src="img/Renta-A-Cars-Lg.png" class="img-fluid rounded-circle"
                    style="height: 50px;"> Renta A Cars</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-dark text-white">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/Renta-A-Cars-Lg.png"
                            class="img-fluid rounded-circle" style="height: 50px;"> Renta A Cars</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-dark text-white">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="RegistroRenta.php">Rentar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login.php">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="pt-5 mt-5 mb-5 container align-content-center col-md col-md-4">
        <h1>Catalago de Vehiculos</h1>
    </div>
    <div class="container col-md col-md-8 text-black mb-5 ">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="cars/mitsubishi.jpg"class="card-img-top" alt="...">
                    <div class="card-body bg-secondary bg-gradient">
                        <h5 class="card-title">Mitsubichi Larcer 2020</h5>
                        <p class="card-text">El Lancer es un carro con todas las comodidades y equipamiento para ser un
                            carro familiar excelente. Cinturones de seguridad en todos los puestos, amplio interior, un
                            baúl capaz y visibilidad suficiente para moverse por el tráfico, en buena parte ayudada por
                            espejos de buen tamaño.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="cars/nissan.jpg"  class="card-img-top" alt="...">
                    <div class="card-body bg-secondary bg-gradient">
                        <h5 class="card-title">Nissan Versa 2021</h5>
                        <p class="card-text">La tecnología del Nuevo Nissan Versa hace cada momento tras el volante más
                            sencillo, seguro y disfrutable. Las asistencias de manejo te ayudaran a prevenir cualquier
                            problema, e incluso pueden intervenir por ti de ser necesario.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="cars/nissannavara.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-secondary bg-gradient">
                        <h5 class="card-title">Toyota Land Cruiser Prado 2020</h5>
                        <p class="card-text">El Toyota Land Cruiser Prado cuenta con un fuerte carácter y un atractivo y
                            robusto diseño basado en líneas agresivas y estilo compacto de gran elegancia con una mezcla
                            de texturas de forma armónica para brindar un diseño que otorga distinción. Este potente
                            todo terreno se ha reinventado y superado a sí mismo.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="cars/toyota.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-secondary bg-gradient">
                        <h5 class="card-title">Toyota Corolla 2020</h5>
                        <p class="card-text">El nuevo Corolla tiene lo que buscas de un sedán práctico y estilizado. Sus
                            líneas en parrilla, bumper y faros, ahora son mucho más deportivas y definen un perfil más
                            agresivo y moderno que impresionará a cualquiera.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>