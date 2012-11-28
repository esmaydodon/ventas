<?
include("../func/funciones.php");
$idTP = $_POST['id'];
$query="UPDATE usuarios_local SET estado_us_local='0' where idusuarios ='$idTP'";
mysql_query($query) or die(ovni("eliminandouslo.php")); 
echo "<div onclick='gestionarLocalUsuario()'>Ver Lista de locales</div>";



?>