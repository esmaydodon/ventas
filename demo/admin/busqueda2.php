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
        echo"<form action='agregacar.php' method='POST'>
            <table border= '1' class='tabla'>
            <tr>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Categoria</td>
            <td>Cantidad</td>
            <td>Precio</td>
            <td>Vidrio</td>
<td>Select</td>            
<td>Imagen</td>
            
            <td>Agregar/Quitar</td></tr>";
	while($filas=mysql_fetch_array($resultado)){
            $cadena = ereg_replace( "([     ]+)","%20",$filas['ruta_img1']);
				#qui meto el if y variables cadena
if(!$carro || !isset($carro[md5($filas['idproductos'])]['identificador']) || $carro[md5($filas['idproductos'])]['identificador']!= md5($filas['idproductos'])){ 
$cadenaAgregarQuitar="<td><a href='agregacar.php?id=".$filas['idproductos']."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>
 </td>";
		}else{
$cadenaAgregarQuitar="<td><a href='borracar.php?SID&id=".$filas['idproductos']."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a></td>";		
	} 
        echo" <tr>
            <td>".$filas['codigo_producto']." </td>
    <td>".limitarPalabras($filas['descripcion_producto'],20)."</td>
   <td>".$filas['nombre_tipo_producto']."</td>
   <td>".$filas['Cantidad_producto']."</td>    
   <td>".$filas['precio']."</td>";
        if($filas['tipo_vidrio_idtipo_vidrio']!="0"){
            $link=1;//rntonces si es vidrio
            $vender="<a href='ventaVidrio.php?idproducto=".$filas['idproductos']."'>
<img src='../imagenes/.gif' border='0' title='Vender'>Vender</a>";
        }  else {
            $link=0;//rntonces si no tiene tipo de vidrio no es vidrio
            $vender="";
        } 
   echo "<td>".$vender."</td>
   <td><input type='checkbox' name='seleccion[]' value='".$filas['idproductos']."'></td>
   <td><a class='zoom' href=".$cadena." style='cursor:pointer; ' onMouseOver=imagenProducto(".$filas['idproductos'].") >
      <img  src='".$cadena."' width='50' height='50'> </a></td>"
   .$cadenaAgregarQuitar."";
                
                }
                echo "</table>
                   <input type='submit' name='Submit' value='Enviar'> </form>";
}
?>
