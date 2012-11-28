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
$consulta = dime("select * from local where idlocal = '".mysql_escape_string($idc)."'");
while($DS = mysql_fetch_array($consulta)){
$html=" 
   <form action='modificandoLocal.php' method='post' enctype='multipart/form-data'  class='contacto'>
<input type='hidden' name='idlocal' value='".$DS['idlocal']."'>
<div><label>Nombre Local:</br><input type='text' name='nombre_local' size='60' maxlength='30' value='".$DS['nombre_local']."' /> </label></div>
<div><label>Ciudad:</br><input type='text' name='ciudad_local' size='60' maxlength='120' value='".$DS['ciudad_local']."' /> </label></div>
<div><label>Departamento:</br><input type='text' name='departamento_local' size='60' maxlength='120' value='".$DS['departamento_local']."' /> </label></div>
<div><label>Direccion Local:</br><input type='text' name='direccion_local' size='60' maxlength='120' value='".$DS['direccion_local']."' /> </label></div>
<div><label>Telefono Local:</br><input type='text' name='telefono_local' size='60' maxlength='120' value='".$DS['telefono_local']."' /> </label></div>
  <input type='submit' value='Registrar' />
</form>  ";	
	};
	echo $html;
	
 
?>

</body>
</html>