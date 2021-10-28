<!DOCTYPE html>
<html lang="es">

<head>
    <title>Formulario para alquiler de auto</title>
    <link rel="shortcut icon" href="img/Renta-A-Cars.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-dark ">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand " href="Catalogo.php"><img src="img/Renta-A-Cars-Lg.png" class="img-fluid rounded-circle"
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
                            <a class="nav-link active" aria-current="page" href="Catalogo.php">Catalago</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login.php">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="p-4 mt-5 pt-5">
        <div class=" p-4 container align-content-center bg-light rounded-2 col-md col-md-8">
            <form class="row gx-1 gy-3 align-items-center needs-validation" method="post"
                action="RegistroRenta_.php">
                <h3 class="card-title">Solicitud de Alquiler de Autos</h3>
                <div class="col-md-4">
                    <label for="inputName" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" id="inputName" required>
                </div>
                <div class="col-md-4">
                    <label for="inputDui" class="form-label">Dui</label>
                    <input type="text" class="form-control" id="inputDui" name="dui" required>
                </div>
                <div class="col-md-4">
                    <label for="inputNit" class="form-label">Nit</label>
                    <input type="text" class="form-control" id="inputNit" name="nit" required>
                </div>
                <div class="col-md-4">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" id="exampleInputEmail1"required>
                </div>

                <div class="col-md-4">
                    <label for="inputlicencia" class="form-label">licencia</label>
                    <input type="text" class="form-control" id="inputlicencia" name="licencia" required>
                </div>
                <div class="col-md-1">
                    <label for="inputAge" class="form-label">Edad</label>
                    <input type="text" class="form-control" id="inputAge" name="edad" required>
                </div>
                <div class="col-md-3">
                    <label for="inputState" class="form-label">Estado Laboral</label>
                    <select name="estado" class="form-select" aria-label="Default select example " id="inputState">
                        <option selected disabled>Selecionar</option>
                        <option required value="Empleado"> Empleado</option>
                        <option required value="Desempleado"> Desempleado</option>
                        <option required value="Tabajador independiente"> Tabajador independiente</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="textAreaAddress" class="form-label">Direccion</label>
                    <textarea class="form-control" id="textAreaAddress" name="direccion" rows="3" required></textarea>
                </div>
                <div class="col-md-2">
                    <label for="inputDia" class="form-label">Días a alquilar</label>
                    <input type="text" class="form-control" id="inputDia" name="dias_alquiler" required>
                </div>
                <div class="col-md-3">
                    <label for="inputTypeCar" class="form-label">Tipo de Carro</label>
                    <select name="tipo_carro" class="form-select" aria-label="Default select example" id="inputTypeCar">
                        <option selected disabled>Selecionar</option>
                        <option required="" value="Sedan"> Sedan</option>
                        <option required="" value="Camioneta"> Camioneta</option>
                        <option required="" value="Pick Up"> Pick Up</option>
                        <option required="" value="Microbus"> Microbus</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputCar" class="form-label">Carro</label>
                    <select name="carro" class="form-select" aria-label="Default select example" id="inputCar">
                        <option selected disabled>Selecionar</option>
                        <option disabled> * Sedan *</option>
                        <option required="" value="Nissan Versa 2021"> Nissan Versa 2021</option>
                        <option required="" value="Toyota Corolla 2020"> Toyota Corolla 2020</option>
                        <option required="" value="Mitsubichi Larcer 2020"> Mitsubichi Larcer 2020</option>
                        <option disabled> * Camioneta *</option>
                        <option required="" value="Nissan Navara 2021"> Nissan Navara 2021</option>
                        <option required="" value="Toyota Land Cruiser Prado 2020"> Toyota Land Cruiser Prado 2020
                        </option>
                        <option required="" value="Jeep Compass 2020"> Jeep Compass 2020</option>
                        <option disabled> * Pick Up *</option>
                        <option required="" value="Nissan Frontier 2021"> Nissan Frontier 2021</option>
                        <option required="" value="oyota Hilux 2020"> Toyota Hilux 2020</option>
                        <option required="" value="Mitsubichi L200 2019"> Mitsubichi L200 2019</option>
                        <option disabled> * Microbus *</option>
                        <option required="" value="Nissan Urvan 2021"> Nissan Urvan 2021</option>
                        <option required="" value="Toyota Hiace 2021"> Toyota Hiace 2021</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputTel" class="form-label">Contacto</label>

                    <div class="input-group">
                        <div class="input-group-text">+503</div>
                        <input type="tel" class="form-control" name="contacto" id="inputTel" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="inputPayment" class="form-label">Pago</label>
                    <div class="form-check form-check-inline ">
                        <input class="form-check-input" type="radio" name="pago" id="inputPayment1">
                        <label class="form-check-label" for="inputPayment1">Efectivo
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pago" id="inputPayment2" checked>
                        <label class="form-check-label" for="inputPayment2">
                            Bitcoin
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pago" id="inputPayment3" checked>
                        <label class="form-check-label" for="inputPayment3">
                            Tarjeta
                        </label>
                    </div>
                </div>


                <div class="col-md-12">
                    <label for="inputDelivery" class="form-label">A domicilio</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="entrega_domicilio" id="inputDelivery1">
                        <label class="form-check-label" for="inputDelivery2">
                            Sí
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="entrega_domicilio" id="inputDelivery2"
                            checked>
                        <label class="form-check-label" for="inputDelivery2">
                            No
                        </label>
                    </div>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    En el caso solicitar entrega a domicilio ingrese el lugar de entrega, caso contrario seleccione "Ire
                    a la agencia"
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="col-md-12">
                    <label for="Entrega" class="form-label">Direccion para entrega</label>
                    <textarea class="form-control" id="Entrega" name="l_entrega" rows="3"></textarea>
                </div>
                <div class="col-md-12">
                    <input class="form-check-input" type="checkbox" name="l_entrega" id="flexRadioDefault6">
                    <label class="form-check-label" for="flexRadioDefault6">
                        Ire a la agencia
                    </label>

                </div>

                <div class="col-md-4">
                    <label for="fecha" class="form-label">Fecha de alquiler</label>
                    <input type="date" name="feacha_alquiler" class="form-control" id="fecha" required>

                </div>
                <div class="col-md-4">
                    <label for="hora" class="form-label">Hora de entrega</label>
                    <input type="time" name="hora_entrega" class="form-control" id="hora" required>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="acepto_politicas" value="Si"
                        id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Acepto las políticas de privacidad. </label>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>