<?php

include("AutoDB.php");

if(isset($_POST['Dui'], $_POST["newpass"]) and $_POST["Dui"] <> "" and $_POST["newpass"] <> ""){
    if($db){
        $email=$_POST["email"];
        $newpass=$_POST["newpass"];
        $Dui=$_POST["Dui"];
        $consulta = "Select  email,Dui From datos where email='$email' and Dui='$Dui'";
        $result=mysqli_query($db,$consulta);
        $fila=mysqli_num_rows($result);
        if($fila){
            $consult="UPDATE datos SET pass='$newpass' WHERE Dui = '$Dui' and email='$email'";
            $resultado=mysqli_query($db,$consult);
            if($resultado){
                ?>
                <?php
                include("RestorePass.php");
                ?>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle"> Contraseña Recuperada, vuelva a iniciar sesion</i>
                </div>
                <?php
                header("refresh: 2; url=Login.php");
            }       
        }else{
            ?>
            <?php
            include("RestorePass.php");
            ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
            <i class="bi bi-info-circle"> Error al Actualizar, datos erroneos
            </i>
            </div>
            <?php
        }
        mysqli_free_result($result);
        mysqli_close($db);
    }else{
        die("Error en conexion".mysqli_connect_error());
    }
}else{
    ?>
    <?php
    include("RestorePass.php");
    ?>
    <div class="alert alert-danger d-flex align-items-center" role="alert">
    <i class="bi bi-info-circle"> Error al Actualizar, datos faltantes
    </i>
    </div>
    <?php
}  
?>