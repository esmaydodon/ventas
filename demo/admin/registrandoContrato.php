<?php 
session_start(); 
$carro=$_SESSION['carro']; 
$cliente=$_SESSION['cliente']; 
include("../func/funciones.php");
#registramos cliente
$tipoDocumento = quitar($_POST["tipoDocumento"]);
$id_cliente = quitar($_POST["id_cliente"]);
$detalle_documento = quitar($_POST["detalle_documento"]); 
$fecha_factura= quitar($_POST['fecha_factura']);
$numero_documento= quitar($_POST['numero_documento']);$monto_total= quitar($_POST['monto_total']);
$editor1= quitar($_POST['editor1']);
$consulta = "INSERT INTO documentos(tipo_de_documentos_idtipo_de_documentos,clientes_idclientes,
		detalle_documento,fecha_emision,numero_documento,total_importe,detalle_contrato)  
 VALUES ('$tipoDocumento','$id_cliente',
 		'$detalle_documento',
		'$fecha_factura','$numero_documento','$monto_total','$editor1')";
	
$result = dime($consulta)or die(ovni("Oo.php"));					 
//echo $consulta;
foreach($carro as $k => $v){
$NuevaCantidad =($v['stock']-$v['cantidad']);
#$actualizarStok="UPDATE productos SET Cantidad_producto = '$NuevaCantidad' WHERE idproductos =".$v['idproductos'];
#$result2 = dime($actualizarStok)or die(ovni("Oo.php"));
//echo $actualizarStok;
	  }
echo "<script>document.location.href='ventas.php'</script>";

?> 