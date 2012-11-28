<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$nombredocumento = quitar($_POST["nombredocumento"]);
$numero_serie = quitar($_POST["numero_serie"]);
$idservicio = quitar($_POST["idservicio"]);

$consulta = dime("UPDATE servicio SET  nombre_servicio= '$nombredocumento', 
	numero_serie ='$numero_serie' 
	WHERE idservicio =$idservicio ") or die (ovni("modificandoProveedor.php"));
			   
echo "<script>document.location.href='panel.php'</script>"; 
?>
