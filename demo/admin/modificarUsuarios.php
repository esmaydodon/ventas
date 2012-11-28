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
$consulta = dime("select u.*,tu.idtipos_usuarios,tu.nombre_tipo_usuario 
from usuarios u inner join tipos_usuarios tu on
 u.tipos_usuarios_idtipos_usuarios=tu.idtipos_usuarios 
where idusuarios = '".mysql_escape_string($idc)."'");
$html =" 
<form id='form2' name='FormClave' method='post' action='modificandoUsuario.php' class='contacto'>";
while( $usuarios = mysql_fetch_array($consulta)){
$html.="
    <input type='hidden' name='idusuarios' value='". $usuarios['idusuarios']."'>
<div><label>Nombre:</br><input type='text' name='nombre_usuario' size='60' maxlength='120' value='". $usuarios['nombre_usuario']."' /> </label></div>
<div><label>DNI:</br><input type='text' name='dni_suario' size='15' maxlength='15' value='". $usuarios['dni_suario']."' /><br></label></div>
<div><label>Sexo:</br><select name='sexo'>"; 
if ($usuarios['sexo']=="0") {    $genero="Femenino";}else{$genero="Masculino";}
$html.="<option value='". $usuarios['sexo']."'>".$genero."</option>   
<option value='1'>Masculino</option>
<option value='0'>Femenino</option>
</select><br></label></div>
<div><label>Nick:</br><input type='text' name='nick_usuario' size='20' maxlength='20' value='". $usuarios['nick_usuario']."' /> <br></label></div>
<div><label>Pass:</br><input type='text' name='pass_usuario' size='20' maxlength='20' value='". $usuarios['pass_usuario']."' /><br></label></div> 
<div><label>Email:<input type='text' name='email_usuario' size='30' maxlength='30' value='". $usuarios['email_usuario']."' /> <br/></label></div>
<div><label>Telefono:<input type='text' name='telefono_usuario' size='15' maxlength='20' value='". $usuarios['telefono_usuario']."' /> <br/></label></div>
<div><label>Celular:</br><input type='text' name='celular_usuario' size='15' maxlength='15' value='". $usuarios['celular_usuario']."' /> <br/></label></div>
<div><label>Direccion:</br><input type='text' name='direccion_usuario' size='60' maxlength='60' value='". $usuarios['direccion_usuario']."' /> <br/></label></div>
<div><label>Usuario / Cargo:</br>
<select name='tipos_usuarios_idtipos_usuarios'>
<option value='". $usuarios['tipos_usuarios_idtipos_usuarios']."'>". $usuarios['nombre_tipo_usuario']."</option>";
$consultaTU=dime("select tu.idtipos_usuarios,tu.nombre_tipo_usuario  from  tipos_usuarios tu");
while ($row = mysql_fetch_array($consultaTU)) {
    $html.="<option value='". $row['idtipos_usuarios']."'>". $row['nombre_tipo_usuario']."</option>";
}
$html.="
</select><br/></label></div>";	
};
$html.="<br>
 <input type='submit' value='Registrar'>
</form> ";
	echo $html;
	
 
?>

</body>
</html>