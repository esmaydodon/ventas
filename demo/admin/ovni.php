<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Automotriz Cajamarca</title> 
<link href="css/estilo.css" rel="stylesheet" type="text/css" /><!--hoja de los estilos--> 
<link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen"><!-- pagina de estilos del menu superior--> 
</head>
<body>
  <?php //////////////////////////////////////////////////   ///
 include '../func/funciones.php';
 ########################################################
 	#para padre

# asigno el valor del id1 a la variable  $abuelo
 ######################################################
/*

<ul>
<li><a href="#">Categorias</a>
	<ul>
		<li id=""><a href="#">sub categoria 01</a></li>
	</ul>

</ul>
*/
$consulta = dime("select idtipos_de_productos,nombre_tipo_producto,tipos_de_productos_idtipos_de_productos,tipos_de_productos_idtipos_de_productos1  from tipos_de_productos 
 ORDER BY idtipos_de_productos ") ;
$html .= " <ul><li>";
while($categorias = mysql_fetch_array($consulta)){
$consulata_padre=dime("select nombre_tipo_producto,idtipos_de_productos from tipos_de_productos  where idtipos_de_productos = ".$categorias['tipos_de_productos_idtipos_de_productos']."")  ; //me saca todos los 1
$yoni= $categorias['idtipos_de_productos'];
$html  .= $categorias['nombre_tipo_producto'];	
 $html .= " <ul>";
 $consulta2 = dime("select idtipos_de_productos,nombre_tipo_producto,tipos_de_productos_idtipos_de_productos,tipos_de_productos_idtipos_de_productos1  from tipos_de_productos where tipos_de_productos_idtipos_de_productos1=$yoni");
while($categorias2 = mysql_fetch_array($consulta2)){
	 $yono=$categorias2['idtipos_de_productos'];
$html  .= "<li>".$categorias2['nombre_tipo_producto']."</li>";	
$consulta3 = dime("select idtipos_de_productos,nombre_tipo_producto,tipos_de_productos_idtipos_de_productos,tipos_de_productos_idtipos_de_productos1  from tipos_de_productos where tipos_de_productos_idtipos_de_productos1=$yono");
while($categorias3 = mysql_fetch_array($consulta3)){
$html  .= "<li>".$categorias3['nombre_tipo_producto']."</li>";	

}
}
}
$html  .= "</li></ul>";

echo $html;
 ?>
</body>
</html>