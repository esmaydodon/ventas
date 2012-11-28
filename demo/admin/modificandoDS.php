<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idTP = quitar($_POST["iddocumento_servicio"]); 
$local= quitar($_POST['local']);
$rango1= quitar($_POST['rango1']);
$rango2= quitar($_POST['rango2']);
$servicio= quitar($_POST['servicio']);
$documento= quitar($_POST['documento']);
$consulta = dime("UPDATE documento_servicio SET rango1='$rango1',
        rango2='$rango2',idservicio='$servicio',iddocumentos='$documento',idlocal='$local'   
	 where iddocumento_servicio ='$idTP'")or die (ovni("modificandods.php"));;
 header("Location:panel.php");
?>
