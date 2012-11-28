<?php 
include("../func/funciones.php");
#resivimos las variables
$RucProvedor = quitar($_POST["RucProvedor"]);
$textNomProvedor = quitar($_POST["textNomProvedor"]); 
$textTeleProvdor= quitar($_POST['textTeleProvdor']);
$textDescriProvedor= quitar($_POST['textDescriProvedor']);
if($RucProvedor != "" && $textNomProvedor != "" &&  $textTeleProvdor != "" ) 
       { 
$consulta = "INSERT INTO proveedor(ruc_proveedor,
		nombre_proveedor,
		telefono_proveedor,
		descripcion_proveedor)  
 VALUES ('$RucProvedor',
 		'$textNomProvedor',
		'$textTeleProvdor',
		'$textDescriProvedor')";
$result = dime($consulta)or die(mysql_error());					 
echo "<script>document.location.href='panel.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 