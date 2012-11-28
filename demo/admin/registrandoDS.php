<?php 
include("../func/funciones.php");
#resivimos las variables
 
$local= quitar($_POST['local']);
$rango1= quitar($_POST['rango1']);
$rango2= quitar($_POST['rango2']);
$numeroactual= quitar($_POST['numeroactual']);
$servicio= quitar($_POST['servicio']);
$documentos= quitar($_POST['documentos']);
//fecha chekar
 
//fecha end
if($local != "0" && $rango1 != "" && $rango2 != "" && $servicio != "0" && $documentos != "0"  ) 
       {
$consulta = "INSERT INTO documento_servicio(
rango1,rango2,numero_actual,idservicio,iddocumentos,idlocal )  
 VALUES ('$rango1','$rango2','$numeroactual','$servicio','$documentos','$local')";
$result = dime($consulta)or die(ovni("registrandoDS.php"));	
//echo $consulta;
echo "<script>document.location.href='panel.php'</script>";
 }else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 