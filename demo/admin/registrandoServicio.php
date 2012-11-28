<?php 
include("../func/funciones.php");
#resivimos las variables

$nombreservicio = quitar($_POST["nombreservicio"]);
$numeroserie= quitar($_POST['numeroserie']);
if($nombreservicio != "" && $numeroserie != "" ) 
       {
$consulta = "INSERT INTO servicio(nombre_servicio,numero_serie )  
 VALUES ('$nombreservicio','$numeroserie')";
$result = dime($consulta)or die(ovni("registrandoser.php"));	
//echo $consulta;
echo "<script>document.location.href='panel.php'</script>";
}
 else{
          echo 'introdusca datos  (:';}
?> 
