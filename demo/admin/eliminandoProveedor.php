<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE proveedor SET  estado_proveedor= '0' 
WHERE idproveedor =$idp ";
mysql_query($query) or die(ovni("eliminandoProveedor.php")); 
echo "<div id='gestionarProvedores' onclick='gestionarPro()'>Ver Proveedores</div>";



?>
