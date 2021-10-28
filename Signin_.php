<?php
include("AutoDB.php");

if(isset($_POST['registro'])){
    if(strlen($_POST['email'])>=1 && 
    strlen($_POST['pass'])>=1 && 
    strlen($_POST['fullname'])>=1 && 
    strlen($_POST['dui'])>=1 &&
    strlen($_POST['nit'])>=1 &&
    strlen($_POST['Contacto'])>=1 && 
    strlen($_POST['edad'])>=1 &&
    strlen($_POST['Direccion'])>=1 
    ){  
            $edad=trim($_POST['edad']);
            $email = trim($_POST['email']);
            $pass=trim($_POST['pass']);
            $fullname=trim($_POST['fullname']);
            $dui=trim($_POST['dui']);
            $nit=trim($_POST['nit']);
            $Contacto=trim($_POST['Contacto']);
            $Direccion=trim($_POST['Direccion']);
            $fecha_regist = date("d/m/y");
            if($edad<18){
                include("Signin.php");

                ?>
            
            <div class="alert alert-danger d-flex container align-content-center col-sm col-sm-4" role="alert">
            <i class="bi bi-info-circle"> Debe de ser mayor de edad para registrarse</i> 
            </div>            
            <?php
    
            
        }            else{
            $consulta = "INSERT INTO datos(fullname, Dui,Nit,edad,email,pass,Contacto,Direccion, fecha_regist) 
            VALUES ('$fullname','$dui','$nit','$edad','$email','$pass','$Contacto','$Direccion','$fecha_regist')";
            $result=mysqli_query($db,$consulta);
            if($result){
                ?>

                <?php
                include("Signin.php");
                ?>
            <div class="alert alert-success d-flex container align-content-center col-sm col-sm-4" role="alert">
            <i class="bi bi-check-circle"> Cuenta Creada</i>
              </div>
            <?php
                                header("refresh: 1; url=index.php");

            }
            else{
                include("Signin.php");

                ?>
            
            <div class="alert alert-danger d-flex container align-content-center col-sm col-sm-4" role="alert">
            <i class="bi bi-info-circle"> Datos Erroneos</i> 
            </div>            
            <?php
    
            } 
               }

    
    }

}

?>

