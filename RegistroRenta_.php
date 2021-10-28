<?php

include("AutoDB.php");

$nombre = $_POST['nombre'];
$dui = $_POST['dui'];
$nit = $_POST['nit'];
$licencia = $_POST['licencia'];
$edad = $_POST['edad'];
$estado = $_POST['estado'];
$direccion = $_POST['direccion'];
$dias_alquiler = $_POST['dias_alquiler'];
$tipo_carro = $_POST['tipo_carro'];
$carro = $_POST['carro'];
$pago = $_POST['pago'];
$correo = $_POST['correo'];
$contacto = $_POST['contacto'];
$entrega_domicilio = $_POST['entrega_domicilio'];
$l_entrega = $_POST['l_entrega'];
$feacha_alquiler = $_POST['feacha_alquiler'];
$hora_entrega = $_POST['hora_entrega'];
$acepto_politicas = $_POST['acepto_politicas'];


$consulta = "Select  Dui,Nit,email,fullname From datos where Dui='$dui' and Nit='$nit' and email ='$correo' and fullname='$nombre'";
$result=mysqli_query($db,$consulta);

$fila=mysqli_num_rows($result);

if($fila){
    $consulta2 = "Select * From formulario_renta where dui='$dui' and nit='$nit'";
    $result2=mysqli_query($db,$consulta2);

    $fila2=mysqli_num_rows($result2);
    if($fila2){
        ?>
        <?php
                    include("RegistroRenta.php");
                     ?>
        <div class="alert alert-danger d-flex container align-content-center col-sm col-sm-8" role="alert">
            <i class="bi bi-check-circle"> Datos existentes</i>
        </div>
        
        <?php
    }else{
        $query = "INSERT INTO formulario_renta(nombre, dui, nit, licencia, edad, estado, direccion, dias_alquiler, tipo_carro, carro, pago, correo, contacto, entrega_domicilio, l_entrega, feacha_alquiler, hora_entrega, acepto_politicas)
            VALUES('$nombre', '$dui', '$nit', '$licencia', '$edad', '$estado', '$direccion', '$dias_alquiler', '$tipo_carro', '$carro', '$pago', '$correo', '$contacto', '$entrega_domicilio','$l_entrega', '$feacha_alquiler', '$hora_entrega', '$acepto_politicas')";

$ejecutar = mysqli_query($db, $query);

if ($ejecutar) {
    ?>
<?php
            include("RegistroRenta.php");
             ?>
<div class="alert alert-success d-flex container align-content-center col-sm col-sm-8" role="alert">
    <i class="bi bi-check-circle"> Datos ingresados</i>
</div>

<?php
} else {
    ?>
<?php
            include("RegistroRenta.php");
             ?>
<div class="alert alert-success d-flex container align-content-center col-sm col-sm-8" role="alert">
    <i class="bi bi-check-circle"> Datos ingresados</i>
</div>

<?php
    mysqli_close($db);
}
    }
}else{
    ?>
<?php
            include("RegistroRenta.php");
            ?>
<div class="alert alert-danger d-flex container align-content-center col-sm col-sm-8" role="alert">
    <i class="bi bi-exclamation-circle"> Los datos no coinciden con los registros
    </i>
</div>

<?php
}
mysqli_free_result($result);
mysqli_close($db);
?>