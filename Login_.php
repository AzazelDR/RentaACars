<?php

$email=$_POST['email'];
$pass=$_POST['pass'];
session_start();
$_SESSION['email']=$email; 

include("AutoDB.php");

$consulta = "Select  email,pass From datos where email='$email' and pass='$pass'";

$result=mysqli_query($db,$consulta);

$fila=mysqli_num_rows($result);

if($fila){
    ?>

    <?php
            include("Login.php");
             ?>
<div class="alert alert-success d-flex container align-content-center col-sm col-sm-4" role="alert">
<i class="bi bi-check-circle"> Sesion Iniciada</i>
  </div>
<?php
    header("refresh: 1; url=Catalogo.php");

}else{
    ?>

    <?php
            include("Login.php");
            ?>
    <div class="alert alert-danger d-flex container align-content-center col-sm col-sm-4" role="alert">
    <i class="bi bi-exclamation-circle"> Fallo al iniciar, corrija campos faltantes o erroneos
        </i>
    </div>
    <?php
}
mysqli_free_result($result);
mysqli_close($db);
?>