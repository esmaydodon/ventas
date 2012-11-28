<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$nombredocumento = quitar($_POST["nombredocumento"]);
$iddocumentos = quitar($_POST["iddocumentos"]);
$consulta = dime("UPDATE documentos SET  nombre_documento= '$nombredocumento' 
WHERE iddocumentos =$iddocumentos ") or die (ovni("modificandoProveedor.php"));
echo "<script>document.location.href='panel.php'</script>"; 
?>
