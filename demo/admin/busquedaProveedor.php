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
		$cadbusca="select p.idproveedor, p.nombre_proveedor,p.ruc_proveedor,
p.telefono_proveedor,p.descripcion_proveedor
from proveedor p WHERE p.nombre_proveedor LIKE '%$busqueda%' 
            OR p.ruc_proveedor LIKE '%$busqueda%'
            OR p.telefono_proveedor LIKE '%$busqueda%'
            OR p.descripcion_proveedor LIKE '%$busqueda%' LIMIT 10";	
	} elseif ($numero>1) {
		//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
		//busqueda de frases con mas de una palabra y un algoritmo especializado
		$cadbusca="select p.idproveedor, p.nombre_proveedor,p.ruc_proveedor,
p.telefono_proveedor,p.descripcion_proveedor
from proveedor p WHERE p.nombre_proveedor LIKE '%$busqueda%' 
            OR p.ruc_proveedor LIKE '%$busqueda%'
            OR p.telefono_proveedor LIKE '%$busqueda%'
            OR p.descripcion_proveedor LIKE '%$busqueda%' LIMIT 10";
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
	$resultado =dime($cadbusca)or die(ovni("busqueda Proveedor:"));
	echo"<table border= '1' class='tabla'>
            <tr>
            <td>Nombre</td>
            <td>Ruc</td>
            <td>Telefono</td>
            <td>Descripcion</td>
            <td>editar</td><td>eliminar</td></tr>";
        while($filas=mysql_fetch_array($resultado)){
		echo"
<tr><td>".$filas['nombre_proveedor']." </td>
<td>".$filas['ruc_proveedor']."</td>   
<td>".$filas['telefono_proveedor']."</td>
<td>".limitarPalabras($filas['descripcion_proveedor'],20)."</td>
  <td><a id ='modificarbuscando' style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosProveedor(".$filas['idproveedor'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a></td>
    <td><a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarProveedor(".$filas['idproveedor'].")'><img src='../imagenes/remove.png' width='16' height='16' /></a></td></tr>
";}
echo "</table>";
}
?>
