<?php 
include("../func/funciones.php");
#resivimos las variables
$nombredocumento = quitar($_POST["nombredocumento"]);
$provedor= quitar($_POST['provedor']);
if($nombredocumento != "" ) 
       { 
//fecha chekar
if ($_POST['textfechaguia'] == " ") {
$textfechaguia ="null" ; 
$fechaguiaMysql ="null";
}else {
$textfechaguia= strtotime($_POST['textfechaguia']);
$fechaguiaMysql =date('Y-m-d',$textfechaguia); 
}
//fecha end
$consulta = "INSERT INTO documentos(nombre_documento )  
 VALUES ('$nombredocumento')";
$result = dime($consulta)or die(ovni("registrandodoc.php"));	
//echo $consulta;
echo "<script>document.location.href='panel.php'</script>";
 }
 else{
          echo 'introdusca datos ';}
?> 
