
<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idguias = quitar($_POST["idguias"]);
$numero_guia = quitar($_POST["numero_guia"]);
$fecha_guia = quitar($_POST["fecha_guia"]);
$proveedor_idproveedor = quitar($_POST['provedor']);

$consulta = dime("UPDATE guias SET  numero_guia= '$numero_guia', 
	fecha_guia ='$fecha_guia',
	proveedor_idproveedor  ='$proveedor_idproveedor'
	WHERE idguias =$idguias ") or die (ovni("modificandoGuia.php"));
			   
echo "<script>document.location.href='panel2.php'</script>"; 
?>
