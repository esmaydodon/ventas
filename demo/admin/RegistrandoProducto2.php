<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$cadenatexto = quitar($_POST["cadenatexto"]); 
$tipoProducto= quitar($_POST['tipoProductos']);
$precio= quitar($_POST['txtPrecio']);
$unidadM= quitar($_POST['txtund']);


$consulta = "<h1>INSERT INTO productos(nombre_producto,precio,tipos_de_productos_idtipos_de_productos,unidad_medida,ruta_img1 )  
				   VALUES ('$cadenatexto','$precio',$tipoProducto,$unidadM,'$n_path_file1')</h1>";
				   
				   echo $consulta;
?>
