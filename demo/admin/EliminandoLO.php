<?
include("../func/funciones.php");
$idTP = $_POST['id'];
$query="UPDATE local SET estado_local='0' where idlocal ='$idTP'";
mysql_query($query) or die(ovni("eliminandoTIPOusuarios.php")); 
echo "<div onclick='gestionarLocal()'>Ver Lista de locales</div>";



?>