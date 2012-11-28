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
$consulta = dime("select c.idcliente,c.nombre_cliente,c.dni_cliente,c.nombre_comercial_cliente,
c.ruc, c.direccion_cliente, c.telefono1_cliente, c.telefono2_cliente,
c.email_cliente, c.web_cliente   from clientes c
where idcliente = '".mysql_escape_string($idc)."'");
$html =" 
<form id='form2' name='FormClave' method='post' action='modificandoCliente.php' class='contacto'>";
while( $clientes = mysql_fetch_array($consulta)){
$html.="
    <input type='hidden' name='idcliente' value='". $clientes['idcliente']."'>
<div><label>Nombre :</br><input type='text' name='nombre' size='60' maxlength='120' value='". $clientes['nombre_cliente']."' /> </label></div>
<div><label>DNI:</br><input type='text' name='dni' size='10' maxlength='9' value='". $clientes['dni_cliente']."' /><br></label></div>
<div><label>Nombre Comercial:</br><input type='text' name='nombrecomercial' maxlength='120'size='60'  value='". $clientes['nombre_comercial_cliente']."' /><br></label></div>
<div><label>RUC:</br><input type='text' name='ruc' size='10' maxlength='12' value='". $clientes['ruc']."' /> <br></label></div>
<div><label>Direccion:</br><input type='text' name='direccion' size='50' maxlength='100' value='". $clientes['direccion_cliente']."' /><br></label></div> 
<div><label>Telefono1:<input type='text' name='telefono1' size='15' maxlength='15' value='". $clientes['telefono1_cliente']."' /> <br/></label></div>
<div><label>Telefono2:<input type='text' name='telefono2' size='15' maxlength='20' value='". $clientes['telefono2_cliente']."' /> <br/></label></div>
<div><label>Email:</br><input type='text' name='email' size='60' maxlength='60' value='". $clientes['email_cliente']."' /> <br/></label></div>
<div><label>Web:</br><input type='text' name='web' size='10' maxlength='50' value='". $clientes['web_cliente']."' /> <br/></label></div>";	
};
$html.="<br>
 <input type='button' onClick='checkMe()' value='Guardar Cliente'>
</form> ";
	echo $html;
	
 
?>

</body>
</html>