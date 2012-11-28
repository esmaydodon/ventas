<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");

$idusuarios = $_POST["idusuarios"];
$nombre_usuario = $_POST["nombre_usuario"];
$dni_suario = quitar($_POST["dni_suario"]);
$sexo = quitar($_POST["sexo"]);
$nick_usuario = quitar($_POST["nick_usuario"]);
$pass_usuario = quitar($_POST["pass_usuario"]);
$email_usuario = quitar($_POST["email_usuario"]);
$telefono_usuario = quitar($_POST["telefono_usuario"]);
$celular_usuario = quitar($_POST["celular_usuario"]);
$direccion_usuario = quitar($_POST["direccion_usuario"]);
$tipos_usuarios_idtipos_usuarios = quitar($_POST["tipos_usuarios_idtipos_usuarios"]);
$consulta = dime("UPDATE usuarios SET   
	nombre_usuario ='$nombre_usuario',
	dni_suario ='$dni_suario',
	sexo ='$sexo', 
	nick_usuario ='$nick_usuario', 
	pass_usuario ='$pass_usuario', 
	email_usuario ='$email_usuario', 
	telefono_usuario ='$telefono_usuario', 
	celular_usuario='$celular_usuario', 
	direccion_usuario ='$direccion_usuario', 
	tipos_usuarios_idtipos_usuarios ='$tipos_usuarios_idtipos_usuarios' 
	WHERE idusuarios ='$idusuarios'  ") or die (ovni("modificandoUsuarios.php"));
	 echo "<script>document.location.href='panel.php'</script>"; 
?>
