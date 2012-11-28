<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE clientes SET  estado_cliente= '0' 
WHERE idcliente =$idp ";
mysql_query($query) or die(ovni("eliminando cliente")); 
echo "<div id='gestionarProductos' onclick='gestionarCliente()'>Ver Clientes</div>";

?>