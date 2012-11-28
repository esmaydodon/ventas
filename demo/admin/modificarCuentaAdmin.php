<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
include("../func/funciones.php");$idc = $_POST['id'];
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" >

</script>
</head>

<body>
<?

$consulta = dime("select u.idusuarios,u.nombre_usuario,u.nick_usuario,u.pass_usuario,
u.email_usuario,u.tipos_usuarios_idtipos_usuarios
from usuarios u where tipos_usuarios_idtipos_usuarios = $idc ");
while($usuario = mysql_fetch_array($consulta)){
echo " <form  id='form2' name='FormClave' method='post'
    action='modificandoclave.php' 
    class='contacto'    >
<input type='hidden' name='idusuario' value='". $usuario['idusuarios']."'>
Nombre Y Apellidos :<input  type='text' name='nombreUsuario' value='". $usuario['nombre_usuario']."'/><br>
Email :<input  type='text' name='emailUsuario' value='".$usuario['email_usuario']."'/><br>
Nick Usuario :<input  type='text' name='nickUsuario' value='".$usuario['nick_usuario']."'/><br>
clave anterior :<input type='password' name='pass' onKeyUp='confirmar()'   id='textfield0' /></br>
clave nuevaclave :<input type='text' name='pass1'    id='textfield3' />
<div id='confirmar'></div>
</form> 	";	
	} 
?>

</body>
</html>