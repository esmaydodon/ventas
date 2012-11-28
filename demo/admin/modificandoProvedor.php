<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idproveedor = quitar($_POST["idPro"]);
$ruc_proveedor = quitar($_POST["rucProv"]);
$nombre_proveedor = quitar($_POST["nombreProv"]);
$descripcion_proveedor = quitar($_POST['descripProv']);
$telefono_proveedor = quitar($_POST['telefonoProv']);
$consulta = dime("UPDATE proveedor SET  ruc_proveedor= '$ruc_proveedor', 
	nombre_proveedor ='$nombre_proveedor',
	descripcion_proveedor  ='$descripcion_proveedor',
	telefono_proveedor ='$telefono_proveedor' 
	WHERE idproveedor =$idproveedor ") or die (ovni("modificandoProveedor.php"));
			   
echo "<script>document.location.href='panel.php'</script>"; 
?>
