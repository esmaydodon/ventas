<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
.texto{ padding:0px 10px 0px 10px;   float:left;}
</style> 
</head>

<body>
<div id="formularioProductos"><!--formulario de registro de productos-->
<form action="RegistrandoProducto.php" method="post" enctype="multipart/form-data" >
N° Guia:<? $consulata_guia=dime("select idguias,numero_guia from guias order by  idguias desc");
    echo"<select id ='guias1' name='guias1' class='select'>
	     <option value=''>Seleccione</option>";
		while($tipoProg=mysql_fetch_array($consulata_guia)){
    	echo"<option value='".$tipoProg['idguias'] ."'>".$tipoProg['numero_guia'] ."</option>";}
	echo"</select>";?> Nueva Guia <br>
<div class="texto">Codigo Producto:</div><input type="text" name="codigoProducto" size="60" maxlength="120" value="" /> <br>
<span class="texto">Nombre Producto:</span>
<input type="text" name="cadenatexto" size="60" maxlength="120" value="" /> <br>
<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
Unid Medida:<input type="text" name="txtund" size="10" maxlength="5" value="" />
Medidas:<input type="text" name="txtmedidas" size="10" maxlength="5" value="" /><br>
Precio:<input type="text" name="txtPrecio" size="10" maxlength="10" value="" /> 
Precio ML:<input type="text" name="txtPrecioM2" size="10" maxlength="10" value="" /> 
Precio Mayorista:<input type="text" name="txtPrecioMayorista" size="10" maxlength="10" value="" /> <br/>
<span class="texto">Categoria</span>:<? $consulata_tipo=dime("select idtipos_de_productos,nombre_tipo_producto from tipos_de_productos order by  idtipos_de_productos desc");
    echo"<select id ='tipoProductos' name='tipoProductos' class='select'>
	     <option value=''>Categoria</option>";
		while($tipoPro=mysql_fetch_array($consulata_tipo)){
    	echo"<option value='".$tipoPro['idtipos_de_productos'] ."'>".$tipoPro['nombre_tipo_producto'] ."</option>";}
	echo"</select>";?>
<br>
<span class="texto">Cantidad:</span>
<input type="text" name="txtCantidad" size="10" maxlength="10" value="" /> <br/>
<b>Imagen: </b> <br/>
    <input name="file1" type="file" id="file1" /><br/> 
    <input type="submit" value="Registrar" />
</form>
</div>
</body>
</html>
