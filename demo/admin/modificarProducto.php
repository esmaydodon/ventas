<html>
<?
include("../func/funciones.php");$idc = $_POST['id'];
?>
<head>
    
 
</head>

<body>
<?
 
$consulta = dime("select p.idproductos,p.codigo_producto,
p.descripcion_producto,
p.unidad_medida,medidas_producto,
tp.nombre_tipo_producto,
tp.idtipos_de_productos,
p.precio,precio_x_metro,precio_mayorista,
p.Cantidad_producto,
p.ruta_img1,p.fecha_caducidad_pro,p.cantidad_minima,p.observacionedicion,p.fecha_edicion_pro,
g.numero_guia
guias_idguias from productos as p inner join guias as g on
g.idguias=p.guias_idguias inner join tipos_de_productos as tp on
tp.idtipos_de_productos = p.tipos_de_productos_idtipos_de_productos
 where p.idproductos  =$idc ")or die( ovni("Oo"));
while($tipoProducto = mysql_fetch_array($consulta)){
	$cadena = ereg_replace( "([     ]+)","%20",$tipoProducto['ruta_img1']);
echo " <div style='float:left;'>
<img  src=".$cadena." width='164px' height='164px' >
</div>
<div style=' '>
<form id='form2' name='FormClave' method='post' action='modificandoPRD.php' class='contacto'>
<div class='mensaje'>
fecha de edicion:<input  type='text' name='fechaedicion' value='".date('Y/m/d')."'/><br>
Observacion:<textarea  name='observacionedicion' rows='2' cols='50'>
".$tipoProducto['fecha_edicion_pro']."->". $tipoProducto['observacionedicion']."
</textarea>
</div>
<br>    
<input type='hidden' name='idP' value='". $tipoProducto['idproductos']."'>
Código:<input  type='text' name='codigoP' value='". $tipoProducto['codigo_producto']."'/><br>
Descripcion :  <br>  
<textarea  name='nombreP' rows='2' cols='50'>
". $tipoProducto['descripcion_producto']." 
</textarea><br>
Cantidad :<br><input  type='text' name='cantidad' value='". $tipoProducto['Cantidad_producto']."'/> + <input  type='text' name='cantidad2' value=''/> <br>
Cantidad Minima :<input  type='text' name='cantidadminima' value='". $tipoProducto['cantidad_minima']."'/>   <br>
Feccha Caducidad:<input  type='text' name='txtFechaCadu2' id='campofecha2' value='". $tipoProducto['fecha_caducidad_pro']."'></input>  <br>    
<div class='ocultar'>Unidad Medida:<input  type='text' name='unidadP' value='". $tipoProducto['unidad_medida']."'/> </div> 
<div class='ocultar'>Medidas:      <input  type='text' name='medidasP' value='". $tipoProducto['medidas_producto']."'/> </div><br>
Categoría:<input  type='text' name='tipoP2' value='". $tipoProducto['nombre_tipo_producto']."'/> <br>
<input  type='hidden' name='tipoP' value='". $tipoProducto['idtipos_de_productos']."'/> 
Precio:<input  type='text' name='precioP' value='". $tipoProducto['precio']."'/> 
<div class='ocultar'>Precio por ML:<input  type='text' name='precioPm2' value='". $tipoProducto['precio_x_metro']."'/> </div>
<br>Precio Mayorista:<input  type='text' name='precioPmay' value='". $tipoProducto['precio_mayorista']."'/> 
<br>N Guia:<input  type='text' name='guia' value='". $tipoProducto['guias_idguias']."'/> 
 <input type='submit'   value='Guardar Cambios'>
</form>  
</div>	";	
	} 
	

?>

</body>
</html>