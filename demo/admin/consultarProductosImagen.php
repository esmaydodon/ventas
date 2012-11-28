<?
include("../func/funciones.php");
$idc = $_POST['id'];
 #para paginar
  $consulta = dime(" select idproductos,descripcion_producto, ruta_img1  from productos   where  idproductos =$idc");
 $productos = mysql_fetch_array($consulta) ; 
	$cadena = ereg_replace( "([     ]+)","%20",$productos['ruta_img1']);
	echo "  <div id='im'> <img  src=".$cadena." ></div>"; 
?>