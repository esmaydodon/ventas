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
$consulta = dime("select idproveedor,nombre_proveedor,ruc_proveedor,descripcion_proveedor,telefono_proveedor  from proveedor  where idproveedor = '".mysql_escape_string($idc)."'");
while($tipoProducto = mysql_fetch_array($consulta)){
echo " 
 
<form id='form2' name='FormClave' method='post' action='modificandoProvedor.php' class='contacto'>
<input type='hidden' name='idPro' value='". $tipoProducto['idproveedor']."'>
Ruc:<br><input  type='text' name='rucProv' value='". $tipoProducto['ruc_proveedor']."'/> <br>
Nombre:<br><input  type='text' name='nombreProv' value='". $tipoProducto['nombre_proveedor']."'/>
<br>Descripcion:<br>
<textarea name='textDescriProvedor' id='textDescriProvedor' cols='50' rows='5' tabindex='4'>". $tipoProducto['descripcion_proveedor']."
</textarea> <br>
Telefono:<input  type='text' name='telefonoProv' value='". $tipoProducto['telefono_proveedor']."'/> <br>
 <input type='button' onClick='checkMe()' value='Guardar Cambios'>
</form>  	";	
	} 
?>

</body>
</html>