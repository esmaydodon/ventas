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
$consulta = dime("select g.idguias,g.numero_guia,g.fecha_guia,g.proveedor_idproveedor,p.nombre_proveedor    from guias as g inner join proveedor as p on
p.idproveedor = g.proveedor_idproveedor
where idguias = '".mysql_escape_string($idc)."'");
while($guias = mysql_fetch_array($consulta)){
$html=" 
 
<form id='form2' name='FormClave' method='post' action='modificandoGuia.php' class='contacto'>
<input type='hidden' name='idguias' value='".$guias['idguias']."'>
N°:<input type='text' name='numero_guia' value='".$guias['numero_guia']."'><br>
Fecha:<input  type='text' name='fecha_guia' value='".$guias['fecha_guia']."'/> <br>
Proveedor:";
$consulata_tipo2=dime("select idproveedor,nombre_proveedor from  proveedor order by  idproveedor desc");
    $html.= "<select id ='provedor' name='provedor' class='select'>
	     <option value='".$guias['proveedor_idproveedor'] ."'>".$guias['nombre_proveedor']."</option>";
		while($provedor=mysql_fetch_array($consulata_tipo2)){
    	$html.= "<option value='".$provedor['idproveedor'] ."'>".$provedor['nombre_proveedor'] ."</option>";}
	$html.= "</select>";	
$html.="<br>
 <input type='button' onClick='checkMe()' value='Guardar Guia'>
</form>  ";	
	};
	echo $html;
	
 
?>

</body>
</html>