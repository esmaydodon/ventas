<?php
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
		$cadbusca="select p.*,tp.nombre_tipo_producto  from productos p inner join tipos_de_productos tp on
p.tipos_de_productos_idtipos_de_productos=tp.idtipos_de_productos WHERE p.codigo_producto LIKE '%$busqueda%' OR p.descripcion_producto LIKE '%$busqueda%' 
            OR tp.nombre_tipo_producto LIKE '%$busqueda%' LIMIT 10";	
	} elseif ($numero>1) {
		//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
		//busqueda de frases con mas de una palabra y un algoritmo especializado
		$cadbusca="select p.*,tp.nombre_tipo_producto  from productos p inner join tipos_de_productos tp on
p.tipos_de_productos_idtipos_de_productos=tp.idtipos_de_productos WHERE p.codigo_producto LIKE '%$busqueda%' OR p.descripcion_producto LIKE '%$busqueda%'
            OR tp.nombre_tipo_producto LIKE '%$busqueda%' LIMIT 10";
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
	echo"<table border= '1' class='tabla'>
            <tr><td>Nombre</td>
            <td>Descripcion</td>
            <td>Categoria</td>
            <td>Cantidad</td>
            <td>Precio</td>
            <td>editar</td><td>eliminar</td></tr>";
        while($filas=mysql_fetch_array($resultado)){
		echo"
<tr><td>".$filas['codigo_producto']." </td>
    <td>".limitarPalabras($filas['descripcion_producto'],20)."</td>
   <td>".$filas['nombre_tipo_producto']."</td>
   <td>".$filas['Cantidad_producto']."</td>    
   <td>".$filas['precio']."</td>
    <td><a id ='modificarbuscando' style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosProducto(".$filas['idproductos'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a></td>
    <td><a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarProductobuscado(".$filas['idproductos'].")'><img src='../imagenes/remove.png' width='16' height='16' /></a></td></tr>
";}
echo "</table>";
}
?>
