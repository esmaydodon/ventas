<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE servicio SET  estado_servicio= '0' 
WHERE idservicio =$idp ";
mysql_query($query) or die(mysql_error()); 
echo "<div id='gestionarProductos' onclick='gestionarServ()'>Actualizar Documentos</div>";

?>