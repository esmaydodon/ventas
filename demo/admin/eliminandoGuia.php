<?
include("../func/funciones.php");
$idp = $_POST['id'];
$query="UPDATE guias SET  estado_guia= '0' 
WHERE idguias =$idp ";
mysql_query($query) or die(ovni("consultarGuias.php")); 
echo "<div id='gestionarGui' onclick='gestionarGui()'>Ver Guias</div>";
?>