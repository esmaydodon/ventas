<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idTP = quitar($_POST["idP"]);
$codigoP = quitar($_POST["codigoP"]);
$nombreP = $_POST["nombreP"];
$unidadP = quitar($_POST['unidadP']);
$tipoP = quitar($_POST['tipoP']);
$medidasP = quitar($_POST['medidasP']);
$precioP = quitar($_POST['precioP']);
$precioPm2 = quitar($_POST['precioPm2']);
$precioPmay = quitar($_POST['precioPmay']);
$cantidad = quitar($_POST['cantidad']);  
$cantidad2 = quitar($_POST['cantidad2']);
$cantidadminima = quitar($_POST['cantidadminima']);
$txtFechaCadu2 = quitar($_POST['txtFechaCadu2']);
$observacionedicion = quitar($_POST['observacionedicion']);
//para fecha
$tDate = strtotime($_POST['fechaedicion']);
$dateToMySQL = date("Y-m-d",$tDate); // Formato de Date en mysql es: aaaa-mm-dd
//para fecha end
$cantidad3 = $cantidad + $cantidad2 ;
$consulta = dime("UPDATE productos SET 
 Cantidad_producto='$cantidad3',
 codigo_producto = '$codigoP',
 descripcion_producto ='$nombreP', 
unidad_medida='$unidadP', 
descripcion_producto ='$nombreP',
tipos_de_productos_idtipos_de_productos ='$tipoP',
precio ='$precioP' ,
precio_x_metro ='$precioPm2' ,
cantidad_minima ='$cantidadminima',
fecha_caducidad_pro ='$txtFechaCadu2',
fecha_edicion_pro='$dateToMySQL',
observacionedicion='$observacionedicion',       
 medidas_producto ='$medidasP'
  WHERE  idproductos ='$idTP'  ") or die (ovni("ala"));
			header("Location:panel.php"); 	   				   
# echo $consulta;
?>
