<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
include("../func/funciones.php");
include('login.php');
?>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){
<!--paara mostrar submenus-->
  })
  function checkMe()/*para comparar claves nueva clave  modificar para la bd*/
{
    document.FormClave.submit();
}
$(function(){
	$('#menu li a').click(function(event){
		var elem = $(this).next();
		if(elem.is('ul')){
			event.preventDefault();
			$('#menu ul:visible').not(elem).slideUp();
			elem.slideToggle();
		}
	});
 	$("#select1").change(function(){     //si estas trabajando con php recorda cambiar .asp por .php
		$.post("carga_select2.php",{ id:$(this).val() },function(data){$("#select2").html(data);})
	});
});
   function pies(){
      interval = setInterval("calcular()",1);
}
function calcular(){
      uno = document.autoSumForm.ancho.value;
      dos = document.autoSumForm.alto.value; 
      document.autoSumForm.resultado.value = (uno * dos)/900;
}
function NoSumar(){
      clearInterval(interval);
}
 </script>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<title>Bienvenidos</title>
 <link href="../css/menu2.css" rel="stylesheet" type="text/css" />
<!--<link href="../incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />-->
<link href="../css/adminPanel2.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.menuup{
 	border: 1px solid  #dfedfe;
	 width:150px;
	 float:left;

 }
</style> 
</head>
<body class="incawasi">
<div id="container">
      <? require ('ya.php'); ?> 
  <div id="mainContent">
    <div id="contenedor_carrito">
<!--        <div id ="menuregistro">
  <div class="menuup"> 
  <a href="registrarVidrio.php" ><img src='../imagenes/window.png' width='16' height='16' > VIDRIO</a>
  </div>
 <div class="menuup"> 
 <a href="registrarAluminio.php" ><img src='../imagenes/calendar.png' width='16' height='16' >ALUMINIO </a>
 </div>
<div class="menuup"><a href="productofijo.php" ><img src='../imagenes/calendar.png' width='16' height='16' >PRODUCTO FIJO </a>
</div>
<div class="menuup"><a href="panel2.php" ><i    mg src='../imagenes/calendar.png' width='16' height='16' >ADMINISTRAR </a>
</div>
  </div>-->
<form action="RegistrandoVidrio.php" method="post" enctype="multipart/form-data" name="autoSumForm" id="autoSumForm" >
<input type="hidden"   name="tipoProducto" value="29">
  N° Guia:<? $consulata_guia=dime("select idguias,numero_guia from guias order by  idguias desc");
    echo"<select id ='guias1' name='guias1' class='select' onchange='mostrarfecha2()' >
	     <option value=''>Seleccione</option>";
		while($tipoProg=mysql_fetch_array($consulata_guia)){
    	echo"<option value='".$tipoProg['idguias'] ."'>".$tipoProg['numero_guia'] ."</option>";}
	echo"</select>";?> Fecha guia: <div id="fechaguia"><input type="text" name="fechaguia" size="10" maxlength="5" value="2012-07-26"></input>
            </div>
            
Codigo Producto:<input type="text" name="codigoProducto" size="60" maxlength="120" value="" /> <br>
Nombre Producto:<input type="text" name="cadenatexto" size="60" maxlength="120" value="" /> <br>
<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
	Ancho:<input type="text" id="ancho" name="ancho" size="10" maxlength="5" onFocus="pies();" onBlur="NoSumar();"/>
	Alto:<input type="text" id="alto" name="alto" size="10" maxlength="5"  onFocus="pies();" onBlur="NoSumar();"/><br>
	<!-- medidas-->
	<!-- select de  medidas-->
	Unid Medida:<? $consulata_um=dime("select um.idunidad_de_medidas,um.nombre_unidad_medida from unidad_de_medidas um WHERE idunidad_de_medidas = 2");
    echo"<select id ='unimedida' name='unimedida' class='select'>";
		while($tipoProg2=mysql_fetch_array($consulata_um)){
    	echo"<option value='".$tipoProg2['idunidad_de_medidas'] ."'>".$tipoProg2['nombre_unidad_medida'] ."</option>";}
	echo"</select>";?>
	Medidas:<input type="text" id="resultado" name="txtmedidas" size="10" maxlength="5"  value
=""	/><br> 
	<!--   medidas-->
Categoria:<? $consulata_tipo=dime("select * from tipo_vidrio");
    echo"<select id ='idtipo_vidrio' name='nombre_tipo_vidrio' class='select'>
	     <option value=''>Tipo  De Vidrio</option>";
		while($tipoPro=mysql_fetch_array($consulata_tipo)){
    	echo"<option value='".$tipoPro['idtipo_vidrio'] ."'>".$tipoPro['nombre_tipo_vidrio'] ."</option>";}
	echo"</select>";?><br>
	Cantidad:<input type="text" name="txtCantidad" size="10" maxlength="10" value="" /> <br/>
	<b>Imagen: </b> <br/>
    <input name="file1" type="file" id="file1" /><br/> 
	<div style =" background-color:red;">
	Precio:<input type="text" name="txtPrecio" size="10" maxlength="10" value="" /> 
	Precio ML:<input type="text" name="txtPrecioM2" size="10" maxlength="10" value="" /> 
	Precio Mayorista:<input type="text" name="txtPrecioMayorista" size="10" maxlength="10" value="" /> 
		</div>
<br/>
 <input type="submit" value="Registrar" />
 </form>
 
 </div>
    </div>
   <!-- end #mainContent --></div>
 </body>
</html>