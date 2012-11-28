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
$consulta = dime("select iddocumentos,nombre_documento,numero_guia,idproveedor,fecha_documento
    from documentos where iddocumentos = '".mysql_escape_string($idc)."'");
while($documentos = mysql_fetch_array($consulta)){
$html=" 
 <form action='modificandoDocumento.php' method='post' enctype='multipart/form-data'  class='contacto'>
<input type='hidden' name='iddocumentos' value='".$documentos['iddocumentos']."'>
<div><label>Nombre De Documento</br><input type='text' name='nombredocumento' size='60' maxlength='120' value='".$documentos['nombre_documento'] ."' /> </label></div>
<input type='submit' value='Registrar' />
</form>";	
	};
	echo $html;
	
 
?>

</body>
</html>