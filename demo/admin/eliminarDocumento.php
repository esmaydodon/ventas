<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE documentos SET  estado_documento= '0' 
WHERE iddocumentos =$idp ";
mysql_query($query) or die(mysql_error()); 
echo "<div id='gestionarProductos' onclick='gestionarDocumento()'>Actualizar Documentos</div>";

?>