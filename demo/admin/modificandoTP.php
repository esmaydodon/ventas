<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idTP = quitar($_POST["idTP"]); 
$nombreTP= quitar($_POST['nombreTP']);
$abueloTP= quitar($_POST['categoria']);
$consulta = "<h1>INSERT INTO productos(nombre_producto,precio,tipos_de_productos_idtipos_de_productos,unidad_medida,ruta_img1 )  
				   VALUES ('$idTP','$nombreTP','$abueloTP')</h1>";
				   
				   echo $consulta;
?>
