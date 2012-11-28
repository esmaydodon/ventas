<?php 
session_start(); 
$cliente=$_SESSION['cliente']; 
//Asignamos todos los valores guardados en la sesión a la variable $carro, como hicimos en las páginas anteriores
$carro=$_SESSION['carro']; 
//$products es la variable que usaremos para mostrar los productos en esta página (separados por '+') 
$products=''; 
//$products2 es la que usaremos para enviar a Paypal (separados por ',') 
$products2=''; 
 foreach($carro as $k => $v){ 
 $unidad=$v['cantidad']>1?" unidades de":" unidad de"; 
 $products.=$v['cantidad'].$unidad.$v['descripcion_producto']."+<br>"; 
 $products2.=$v['cantidad'].$unidad.$v['descripcion_producto'].", "; 
 } 
//eliminamos el último '+': 
$products=substr($products,0,(strlen($products)-1)); 
//eliminamos la última coma y el espacio que sigue a la misma: 
$products2=substr($products2,0,(strlen($products2)-2)); 

foreach($cliente as $q => $c){
	  echo"ID Cliente:".$c['idclientes']."<br>
	       Ruc:".$c['ruc']."<br>
	       Nombre Cliente:".$c['nombre_cliente']."<br>
		   Direccion:".$c['direccion_cliente'];
		   
	  } 
?> 
<html> 
<head> 
<title>Finalizar Compra</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<style type="text/css"> 
<!--  --> 
</style> 
</head> 
 
<body> 

Productos:<?php echo $products; ?><br>
Pecio Total:$<?php echo number_format($_GET['costo'],2) ?>

 </body> 
</html> 
