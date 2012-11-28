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
		$cadbusca="select c.idcliente,c.nombre_cliente,c.dni_cliente,c.nombre_comercial_cliente,
c.ruc, c.direccion_cliente, c.telefono1_cliente, c.telefono2_cliente,
c.email_cliente, c.web_cliente   from clientes c  WHERE c.nombre_cliente LIKE '%$busqueda%' 
            OR c.dni_cliente LIKE '%$busqueda%'
            OR c.nombre_comercial_cliente LIKE '%$busqueda%'
            OR c.ruc LIKE '%$busqueda%' 
            OR c.telefono1_cliente LIKE '%$busqueda%' 
            OR c.telefono2_cliente LIKE '%$busqueda%' 
            OR c.email_cliente LIKE '%$busqueda%' 
            OR c.web_cliente LIKE '%$busqueda%' 
            LIMIT 10";	
	} elseif ($numero>1) {
		//SI HAY UNA FRASE SE UTILIZA EL ALGORTIMO DE BUSQUEDA AVANZADO DE MATCH AGAINST
		//busqueda de frases con mas de una palabra y un algoritmo especializado
		$cadbusca="select c.idcliente,c.nombre_cliente,c.dni_cliente,c.nombre_comercial_cliente,
c.ruc, c.direccion_cliente, c.telefono1_cliente, c.telefono2_cliente,
c.email_cliente, c.web_cliente   from clientes c  WHERE c.nombre_cliente LIKE '%$busqueda%' 
            OR c.dni_cliente LIKE '%$busqueda%'
            OR c.nombre_comercial_cliente LIKE '%$busqueda%'
            OR c.ruc LIKE '%$busqueda%' 
            OR c.telefono1_cliente LIKE '%$busqueda%' 
            OR c.telefono2_cliente LIKE '%$busqueda%' 
            OR c.email_cliente LIKE '%$busqueda%' 
            OR c.web_cliente LIKE '%$busqueda%' 
            LIMIT 10";
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
	$resultado =dime($cadbusca)or die(ovni("busqueda Cliente:"));
	echo"<div id='myPrintArea'>
    <table width='600' border='1' class='tabla'><div class='' >	
         <tr class='encabezado' >
         <td>Nombre</td>
         <td>Dni</td>
         <td>Nombre Comercial</td>
         <td>Ruc</td>
         <td>Direccion</td>
         <td>telefono1</td>
         
         <td>Email</td>
          
         <td>Eli</td><td>Edi</td> </tr>";
        while($clientes=mysql_fetch_array($resultado)){
		echo"
<tr><td>". $clientes['nombre_cliente']."</td>
     <td>". $clientes['dni_cliente']."</td>
     <td>".$clientes['nombre_comercial_cliente']."</td>
     <td>".$clientes['ruc']."</td>
     <td>".$clientes['direccion_cliente']."</td>
     <td>".$clientes['telefono1_cliente']."</td>
      
     <td>".$clientes['email_cliente']."</td>
     
     <td>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarCliente(".$clientes['idcliente'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a></td>
    <td><div id='pedir'>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosCliente(".$clientes['idcliente'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a></div></td>
     </tr>
";}
echo "</table>";
}
?>
