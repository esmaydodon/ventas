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
$consulta = dime("select s.idservicio,d.iddocumentos,l.idlocal,l.nombre_local,ds.iddocumento_servicio,ds.rango1,
ds.rango2,ds.numero_actual,s.nombre_servicio,
d.nombre_documento from documento_servicio ds inner join
documentos d on 
ds.iddocumentos=d.iddocumentos inner join servicio s
on ds.idservicio=s.idservicio inner join local l on
ds.idlocal=l.idlocal where iddocumento_servicio = '".mysql_escape_string($idc)."'");
while($DS = mysql_fetch_array($consulta)){
$html=" 
 <form action='modificandoDS.php' method='post' enctype='multipart/form-data'  class='contacto'>
<input type='hidden' name='iddocumento_servicio' value='".$DS['iddocumento_servicio']."'>
<div><label>Rango1</br>
<input type='text' name='rango1' size='60' maxlength='120' value='".$DS['rango1'] ."' /> </label></div>
<div><label>Rango2</br><input type='text' name='rango2' size='60' maxlength='120' value='".$DS['rango2'] ."' /> </label></div>
Servicio: <select id='servicio' name='servicio' class='select'>
<option value ='".$DS['idservicio']."'>".$DS['nombre_servicio']."</option>
";
$consultarservicios=dime("select  s.idservicio, s.nombre_servicio  from servicio s");
while ($servicios = mysql_fetch_array($consultarservicios)) {
  $html .="<option value='".$servicios['idservicio']."'>".$servicios['nombre_servicio']." </option>"; 
}
$html.="</select></br>
Documento:<select id='documento' name='documento' class='select'>
<option value ='".$DS['iddocumentos']."'>".$DS['nombre_documento']."</option>"; 
$consultardocumentos=dime("select  d.iddocumentos, d.nombre_documento  from documentos d");
while ($documentos = mysql_fetch_array($consultardocumentos)) {
  $html .="<option value='".$documentos['iddocumentos']."'>".$documentos['nombre_documento']." </option>"; 
}    
$html.="</select></br>
Local:<select id='local' name='local' class='select'>
<option value ='".$DS['idlocal']."'>".$DS['nombre_local']."</option>"; 
$consultardocumentoslocal=dime("select  d.idlocal, d.nombre_local  from local d");
while ($documentosl = mysql_fetch_array($consultardocumentoslocal)) {
  $html .="<option value='".$documentosl['idlocal']."'>".$documentosl['nombre_local']." </option>"; 
}   
$html.="</select></br><input type='submit' value='Registrar' />
</form>";	
	};
	echo $html;
	
 
?>

</body>
</html>