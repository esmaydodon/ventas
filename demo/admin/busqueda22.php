<?php
#modificado x  www.kuraka.net  -  mmq 
ob_start("ob_gzhandler"); 
session_start();
include("../func/funciones.php");
$busqueda=$_POST['busqueda'];
// DEBO PREPARAR LOS TEXTOS QUE VOY A BUSCAR si la cadena existe
if ($busqueda<>''){
	//CUENTA EL NUMERO DE PALABRAS
	$trozos=explode(" ",$busqueda);
	$numero=count($trozos);
//	echo $numero;
	if ($numero==1) {
		//SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE
		$cadbusca="SELECT * FROM productos WHERE codigo_producto LIKE '%$busqueda%' OR descripcion_producto LIKE '%$busqueda%' LIMIT 10";	
	} elseif ($numero>1) {
		//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
		//busqueda de frases con mas de una palabra y un algoritmo especializado
		$cadbusca="SELECT * FROM productos WHERE codigo_producto LIKE '%$busqueda%' OR descripcion_producto LIKE '%$busqueda%' LIMIT 10";
		/*$cadbusca="SELECT * , MATCH ( nombre_producto, descripcion_producto ) AGAINST ( '$busqueda' ) AS Score FROM productos WHERE MATCH ( nombre_producto, descripcion_producto ) AGAINST ( '$busqueda' ) ORDER BY Score DESC LIMIT 50;";*/
	}
	function limitarPalabras($cadena, $longitud, $elipsis = "..."){
		$palabras = explode(' ', $cadena);
		if (count($palabras) > $longitud)
			return implode(' ', array_slice($palabras, 0, $longitud)) . $elipsis;
		else
			return $cadena;#
	}

	#echo $cadbusca;
	$resultado =dime($cadbusca)or die(ovni("busqueda:"));
	while($filas=mysql_fetch_array($resultado)){
				#qui meto el if y variables cadena
if(!$carro || !isset($carro[md5($filas['idproductos'])]['identificador']) || $carro[md5($filas['idproductos'])]['identificador']!= md5($filas['idproductos'])){ 
$cadenaAgregarQuitar="<a href='agregacar.php?SID&id=".$filas['idproductos']."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>'";
		}else{
$cadenaAgregarQuitar="<a href='borracar.php?SID&id=".$filas['idproductos']."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a>'";		
	}
		echo"Nombre:<b> ".$filas['codigo_producto']."</b><br>
		Descripcion:<b> ".limitarPalabras($filas['descripcion_producto'],20)."</b><br>
		Precio:<b> ".$filas['precio']."<br>Stock:".$filas['Cantidad_producto']."</b><br>";}
}
?>
