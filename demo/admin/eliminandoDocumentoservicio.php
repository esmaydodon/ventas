<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE documento_servicio SET  estado_ds= '0' 
WHERE iddocumento_servicio =$idp ";
mysql_query($query) or die(mysql_error()); 
echo "<div id='gestionarProductos' onclick='gestionarDS()'>Actualizar Documentos</div>";

?>