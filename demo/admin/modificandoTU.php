<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$iddocumento_servicio = quitar($_POST["iddocumento_servicio"]); 
$observacion_tipo_usuario= quitar($_POST['observacion_tipo_usuario']);
$idtipos_usuarios= quitar($_POST['idtipos_usuarios']);
 
$consulta = dime("UPDATE tipos_usuarios SET nombre_tipo_usuario='$nombre_tipo_usuario',
        observacion_tipo_usuario='$observacion_tipo_usuario'    
	 where idtipos_usuarios ='$idtipos_usuarios'")or die (ovni("modificandoTU"));;
 header("Location:panel.php");
?>
