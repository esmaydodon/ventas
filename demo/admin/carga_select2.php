<?php
//aca realiza la conexion
include("func/funciones.php");
$Area=$_POST["id"];
//realizamos la consulta
#    	e
$sql2 = dime("select idtipos_de_productos,nombre_tipo_producto,tipos_de_productos_idtipos_de_productos,tipos_de_productos_idtipos_de_productos1  from tipos_de_productos where 
tipos_de_productos_idtipos_de_productos1='" .mysql_escape_string($Area)."'")or die(ovni("carga_select2.php"));
$numerofilas =mysql_num_rows($sql2);
if ( $numerofilas > 0){
while($tipoPro3=mysql_fetch_array($sql2)){
echo"<option value='".$tipoPro3['idtipos_de_productos']."'>".$tipoPro3['nombre_tipo_producto']."</option>";}

	
   }else
{echo"<option value='".$Area."'>".$Area."</option>";}

?>