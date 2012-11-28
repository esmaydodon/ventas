<?
include("../func/funciones.php");
$idc = $_POST['id'];
$consulta = dime("select cp.Compras_idCompras,
       cp.productos_idproductos,
        p.nombre_producto,
       cp.detalle_cantidad,
       cp.Precio_compra,
       cp.estado_compra,
        u.email_usuario as comprador,
        u.nombre_apellidos_usu,
	p.ruta_img1,
       co.compra_fecha  	
from compras_has_productos as cp inner join productos as p on
cp.productos_idproductos = p.idproductos 
inner join compras as co on 
cp.Compras_idCompras=co.idCompras inner join usuarios as u on
co.usuarios_idusuarios=u.idusuarios
#");
while($productos = mysql_fetch_array($consulta)){
	if($productos['estado_compra']=='0'){$color="#E00";}else{$color="#3F6";}
	$cadena = ereg_replace( "([     ]+)","%20",$productos['ruta_img1']);
	echo "<b>id:</b>". $productos['Compras_idCompras']."<br>
	     <b>compra_fecha:</b>".$productos['compra_fecha']."<br>
		 <b>email_usuario :</b>". $productos['comprador']."<br>
		 <input type='hidden' name='emailComprador' value='". $productos['comprador']."' /> 
		 <strong>detalle:</strong><br>
		 nombre_producto:".$productos['nombre_producto']."<br>
		 Precio_compra:".$productos['Precio_compra']."<br>
		 detalle_cantidad:".$productos['detalle_cantidad']."<br>
		 total:".$productos['detalle_cantidad'] * $productos['Precio_compra'] ."<br>
		  <strong style='background-color: $color'>Estado:</strong>".$productos['estado_compra'] ."<br>
		  <a style='cursor:pointer; text-decoration:underline;' onclick='atender(".$productos['Compras_idCompras'].")'>Atender</a><br><br>";

	
	} 
?>