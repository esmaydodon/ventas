<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE productos SET  estado_producto= '0' 
WHERE idproductos =$idp ";
 
mysql_query($query) or die(mysql_error()); 
echo "<div id='gestionarProductos' onclick='gestionarP()'>Ver Productos</div>";

?>
