<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
include("../func/funciones.php");$idc = $_POST['id'];
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?
$consulta_tipo_producto=dime(" select idtipos_de_productos,nombre_tipo_producto,tipos_de_productos_idtipos_de_productos from tipos_de_productos
WHERE idtipos_de_productos='".mysql_escape_string($idc)."' and estado_tipo_producto='1'");
while ($row = mysql_fetch_array($consulta_tipo_producto)) {
 
 echo " <form id='form2' name='FormClave' method='post' action='modificandoTP.php' class='contacto'>
<input type='hidden' name='idTP' value='". $row['idtipos_de_productos']."'>
Descripcion:<input  type='text' name='nombreTP' value='". $row['nombre_tipo_producto']."'/><br>
<select id ='categoria' name='categoria' class='select'>
<option value='". $row['idtipos_de_productos']."'> ". $row['nombre_tipo_producto']."</option>
  </select>
";
$consulta = dime("select tp.*,tp2.nombre_tipo_producto from tipos_de_productos tp  inner join tipos_de_productos tp2 on
tp.tipos_de_productos_idtipos_de_productos=tp2.idtipos_de_productos
where tp.estado_tipo_producto='1' ");
while($tipoProducto = mysql_fetch_array($consulta)){	
    echo" <select id ='categorias' name='categorias' class='select'>
        <option value='". $tipoProducto['idtipos_de_productos']."'> ". $tipoProducto['nombre_tipo_producto']."</option>
</select> <br>";
} 
echo" <input type='button' onClick='checkMe()' value='Guardar Cambios'>
</form> 	";	   
 
 

}?>

</body>
</html>