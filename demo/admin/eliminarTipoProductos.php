<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE tipos_de_productos SET  estado_tipo_producto= '0' 
WHERE idtipos_de_productos =$idp ";
 
mysql_query($query) or die(mysql_error()); 
echo "<div id='gestionarProductos' onclick='gestionartipoP()'>Ver Categorias</div>";

?>
