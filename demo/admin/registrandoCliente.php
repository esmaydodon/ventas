<?php 
include("../func/funciones.php");
#resivimos las variables
$nombre= quitar($_POST["nombre"]);
$nombre_comercial= quitar($_POST["nombrecomercial"]);
$ruc = quitar($_POST["ruc"]);
$dni= quitar($_POST['dni']);
$direccion= quitar($_POST['direccion']);
$telefono1= quitar($_POST['telefono1']);
$telefono2= quitar($_POST['telefono2']);
$email= quitar($_POST['email']);
$web= quitar($_POST['web']);

if($nombre != "" && $dni != ""&& $direccion != "" &&$telefono1 != "") 
       {  $consulta = "INSERT INTO clientes(nombre_cliente,ruc,direccion_cliente,dni_cliente,nombre_comercial_cliente,telefono1_cliente,telefono2_cliente,email_cliente,web_cliente)  
 VALUES ('$nombre','$ruc','$direccion','$dni','$nombre_comercial','$telefono1','$telefono2','$email','$web')";
$result = dime($consulta)or die(ovni("registrandocliente.php")); 
echo "<script>document.location.href='ventas.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}?> 