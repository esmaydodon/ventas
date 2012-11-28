<?php 
include("../func/funciones.php");
#resivimos las variables
$numeroguia = quitar($_POST["numeroguia"]);
$provedor= quitar($_POST['provedor']);
 

//fecha
$textfechaguia= strtotime($_POST['textfechaguia']);
$fechaguiaMysql =date('Y-m-d',$textfechaguia); 
//fecha end

if($numeroguia != "" && $provedor != "0" && $_POST['textfechaguia'] != "") 
       {   
$consulta = "INSERT INTO guias(numero_guia,proveedor_idproveedor,fecha_guia)  
 VALUES ('$numeroguia','$provedor','$fechaguiaMysql')";
$result = dime($consulta)or die(ovni("registrandoguia.php"));	
//echo $consulta;
echo "<script>document.location.href='panel.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 