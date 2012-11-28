<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE tipos_usuarios SET  estado_tipo_usuario= '0' 
WHERE idtipos_usuarios =$idp ";
 
mysql_query($query) or die(ovni("eliminandoTIPOusuarios.php")); 
echo "<div onclick='gestionarTipoUsuario()'>Ver Proveedores</div>";



?>