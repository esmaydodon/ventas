<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
include("../func/funciones.php");$idc = $_POST['id'];
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?
$consulta = dime("select tu.*  from tipos_usuarios tu where idtipos_usuarios = '".mysql_escape_string($idc)."'");
while($DS = mysql_fetch_array($consulta)){
$html=" 
 <form action='modificandoTU.php' method='post' enctype='multipart/form-data'  class='contacto'>
<input type='hidden' name='idtipos_usuarios' value='".$DS['idtipos_usuarios']."'>
<div><label>Tipo de Usuario</br>
<input type='text' name='nombre_tipo_usuario' size='60' maxlength='120' value='".$DS['nombre_tipo_usuario'] ."' /> </label></div>
<div><label>Observacion</br><input type='text' name='observacion_tipo_usuario' size='60' maxlength='120' value='".$DS['observacion_tipo_usuario'] ."' /> </label></div>
  <input type='submit' value='Registrar' />
</form>";	
	};
	echo $html;
	
 
?>

</body>
</html>