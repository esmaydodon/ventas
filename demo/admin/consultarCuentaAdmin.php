<?
include("../func/funciones.php");
$idc = $_POST['id'];
$consulta = dime("select u.idusuarios,u.nombre_usuario,u.nick_usuario,u.pass_usuario,
u.email_usuario,u.tipos_usuarios_idtipos_usuarios
from usuarios u where tipos_usuarios_idtipos_usuarios = $idc ");
while($usuario = mysql_fetch_array($consulta)){
	echo "<b>Nombre Usuario:</b>". $usuario['nombre_usuario']."<br><b>Nick De Usuadio:</b>". $usuario['nick_usuario']."<br><b>Email De Usuario:</b>".$usuario['email_usuario']."<br>";
	echo "<a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosCuenta(".$usuario['idusuarios'].")'>Modificar Cuenta</a>";
	} 
?>