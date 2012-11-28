<?
include("../func/funciones.php");
$idp = $_POST['id'];

$query="UPDATE usuarios SET  estado_usuario= '0' 
WHERE idusuarios =$idp ";
 
mysql_query($query) or die(ovni("eliminandousuarios.php")); 
echo "<div id='gestionarProvedores' onclick='gestionarPersonal()'>Ver Proveedores</div>";



?>