<?
/*2009
 * kuraka v.7
 * http://kuraka.net 
 * 
 * Julio 2012 - Actualizado por NewtechPeru.com (http://NewtechPeru.com)
 */
?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../func/funciones.php");
include('login.php');
?>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.21.custom.min.js"></script> 
<script type="text/javascript" src="../js/easyzoom.js"></script>
<script type="text/javascript" src="../js/jquery.ui.datepicker-es.js"></script>
<script type="text/javascript" src="../js/jquery.PrintArea.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){
 	//para imprimir
        var options = {}; 
	$("a.prints").click(function(){
	$("div.section").printArea();
});

//para text calendario
 $(".campofecha").datepicker({
      showOn: 'both',
      buttonImage: 'imagenes/panel/calendar.png',
      buttonImageOnly: true,
      changeYear: true,
      numberOfMonths: 2
   });
 //para exportar al exel	
 
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});

 //para mostrar opciones de busqueda

 $("#consultafechaingreso").click(function(evento)
      {  $("#fechaingreso").css("display", "block");
          $("#fechascaducidad").css("display", "none");
          $("#cantidadminimaf").css("display", "none");
         });
 $("#consultafechacadaucidad").click(function(evento)
      {  $("#fechaingreso").css("display", "none");
        $("#fechascaducidad").css("display", "block");
        $("#cantidadminimaf").css("display", "none");
         });
 $("#consultacantidadminima").click(function(evento)
      {  $("#fechaingreso").css("display", "none");
        $("#fechascaducidad").css("display", "none");
        $("#cantidadminimaf").css("display", "block");
         });
         
  }) 		 
</script>
 <script type="text/javascript" src="../js/icomenu1.js"></script>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<title>Bienvenidos</title>
 

<link href="../css/menu2.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery-ui-1.8.21.custom.css" rel="stylesheet" type="text/css"></link>
<link href="../incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
<link href="../css/adminPanel2.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#consultafechaingreso{font-family: 'Helvetica', Arial, sans-serif; font-size: 15px;}
#fechaingreso{display: none;}
#consultafechacadaucidad{font-family: 'Helvetica', Arial, sans-serif; font-size: 15px;}
#fechascaducidad{display: none;}
#consultacantidadminima{font-family: 'Helvetica', Arial, sans-serif; font-size: 15px;}
#cantidadminimaf{display: none;}



</style> 
</head>

<body class="incawasi">
<div id="header"><!-- #header-->
   <div id="title">titulo</div>
<div id="logo">
  <a href="panel.php"><img src="imagenes/logo.jpg" width="208" height="73" /></a></div> 
</div>
<!-- end #header -->
<div id="menumain" style="margin: auto;">
  
<!-- end #header -->
</div>
<!---->
<div id="mainContent">
<div class="reporte">
<?
include("../func/funciones.php");
$idc = $_POST['id'];
#para paginar
$RegistrosAMostrar=20;
//estos valores los recibo por GET enviados por aki  a un js 
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
} # para paginar

###############################################################################3
 ?>
    <div id="consultafechaingreso" class="button mediano naranja">consultar por fecha de ingreso</div>
        <form id="fechaingreso" name="parametros" action="reporteproductos.php" method="POST" enctype="multipart/form-data" class="contacto">
        Fecha de Ingreso:<input size="10" style="width: 70px;" type="text" name="fecha_ingreso" class="campofecha"></input> 
        <input type='hidden' name='parametros' value='1'></input>
        <input type="submit" value="Consultar" />
    </form>
     
    <div id="consultafechacadaucidad" class="button mediano naranja"> consultar productos que vencen entre fechas</div>
        <form id="fechascaducidad" name="entrefechas" action="reporteproductos.php" method="POST" enctype="multipart/form-data" class="contacto">
        Fecha de Ingreso:<input size="10" style="width: 70px;" type="text" name="fecha_ingreso" class="campofecha"></input> 
        Fecha de Caducidad:<input size="10" style="width: 70px;" type="text" name="fecha_caducidad" class="campofecha"></input>
        <input type='hidden' name='parametros' value='2'></input>
        <input type="submit" value="Consultar" />
    </form>    
    <div id="consultacantidadminima" class="button mediano naranja"> consultar productos por cantidad </div>
        <form id="cantidadminimaf" name="cantidadminimaf" action="reporteproductos.php" method="POST" enctype="multipart/form-data" class="contacto">
            Cantidad minima:<input size="10" style="width: 30px;" type="text" name="cantidadminima"  ></input> 
        <input type='hidden' name='parametros' value='3'></input>
        <input type="submit" value="Consultar" />
    </form>    
    <?
 $fecha_ingreso = tm($_POST['fecha_ingreso']);
 $fecha_caducidad = tm($_POST['fecha_caducidad']);
 $cantiminima = $_POST['cantidadminima'];
 $parametro=$_POST['parametros'];

    if ( $parametro== "1"){
       
       $consulta = dime("select p.guias_idguias,p.codigo_producto,
		p.descripcion_producto,
		p.precio,p.precio_x_metro,p.precio_mayorista,
		p.tipos_de_productos_idtipos_de_productos,
		p.unidad_medida,p.medidas_producto,p.Cantidad_producto,
		p.cantidad_minima,p.fecha_caducidad_pro,p.fecha_ingreso_pro,
		p.ruta_img1
 from productos p  where p.fecha_ingreso_pro='$fecha_ingreso' 
        ORDER BY idproductos desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
}elseif ($parametro == "2") {

   $consulta = dime("select p.guias_idguias,p.codigo_producto,
		p.descripcion_producto,
		p.precio,p.precio_x_metro,p.precio_mayorista,
		p.tipos_de_productos_idtipos_de_productos,
		p.unidad_medida,p.medidas_producto,p.Cantidad_producto,
		p.cantidad_minima,p.fecha_caducidad_pro,p.fecha_ingreso_pro,
		p.ruta_img1
 from productos p  where fecha_caducidad_pro BETWEEN '$fecha_ingreso' AND '$fecha_caducidad'
        ORDER BY idproductos desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
   
}elseif ($parametro == "3") {
   $consulta = dime("select p.guias_idguias,p.codigo_producto,
		p.descripcion_producto,
		p.precio,p.precio_x_metro,p.precio_mayorista,
		p.tipos_de_productos_idtipos_de_productos,
		p.unidad_medida,p.medidas_producto,p.Cantidad_producto,
		p.cantidad_minima,p.fecha_caducidad_pro,p.fecha_ingreso_pro,
		p.ruta_img1
 from productos p  where p.Cantidad_producto  = '$cantiminima'
        ORDER BY idproductos desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar");   
     
}
else {
    $consulta = dime("select p.guias_idguias,p.codigo_producto,
		p.descripcion_producto,
		p.precio,p.precio_x_metro,p.precio_mayorista,
		p.tipos_de_productos_idtipos_de_productos,
		p.unidad_medida,p.medidas_producto,p.Cantidad_producto,
		p.cantidad_minima,p.fecha_caducidad_pro,p.fecha_ingreso_pro,
		p.ruta_img1
 from productos p           ORDER BY idproductos desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
    
}
###############################################################################3

$consulta = dime("select p.guias_idguias,p.codigo_producto,
		p.descripcion_producto,
		p.precio,p.precio_x_metro,p.precio_mayorista,
		p.tipos_de_productos_idtipos_de_productos,
		p.unidad_medida,p.medidas_producto,p.Cantidad_producto,
		p.cantidad_minima,p.fecha_caducidad_pro,p.fecha_ingreso_pro,
		p.ruta_img1
 from productos p  where p.fecha_ingreso_pro='$fecha_ingreso' or (fecha_caducidad_pro BETWEEN '$fecha_ingreso' AND '$fecha_caducidad')
        ORDER BY idproductos desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
echo "  <div class='section'>
        <table width='900px' border='1' class='tabla' id='Exportar_a_Excel'><div class='' >	
         <tr class='encabezado' >
         <td>guia</td><td>Codigo</td>
         <td>Descripcion</td><td>Precio Venta sin Igv</td>
         <td>precio Compra</td><td>tipo  de Producto</td>
         <td>cantidad</td>
         <td>cantidad Minima</td>
         <td>Fecha de Ingreso</td>
         <td>Fecha de  Caducidad</td>
         </tr>";
while($productos = mysql_fetch_array($consulta)){
	$cadena = ereg_replace( "([     ]+)","%20",$productos['ruta_img1']);
	echo "
	
        <tr><td>". $productos['guias_idguias']."</td>
            <td>". $productos['codigo_producto']."</td>
                <td>".$productos['descripcion_producto']."</td>
                <td>".$productos['precio']."</td>
                <td>".$productos['precio_mayorista']."</td>
                <td>".$productos['tipos_de_productos_idtipos_de_productos']."</td>
                <td>".$productos['Cantidad_producto']."</td>
                <td>".$productos['cantidad_minima']."</td>
                <td>".$productos['fecha_ingreso_pro']."</td>
                <td>".$productos['fecha_caducidad_pro']."</td></tr>";
  
	}
       #paginar	
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM productos"));
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;
//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
if($Res>0) $PagUlt=floor($PagUlt)+1;
//desplazamiento
        echo"
<tr><td colspan='6' ><div style='margin-left: 121px;'>
<div  style=' clear:both; width:100%;'>
<a style=' float:left;text-decoration:underline;cursor:pointer;' onclick=\"Pagina('1')\">Primero</a> ";
 if($PagAct>1) echo "<a style=' float: left; text-decoration:underline;cursor:pointer;' onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Pagina('$PagUlt')\">Ultimo</a></div>";       
        echo "
<div></td></tr>            
</table>  </div>

   <form action='cficheroExcel.php' method='post' target='_blank' id='FormularioExportacion'>
<p>Exportar a Excel  <img src='imagenes/panel/export_to_excel.gif' class='botonExcel' /></p>
<input type='hidden' id='datos_a_enviar' name='datos_a_enviar' />
<a href='javascript:void(0)' class='prints' title='imprimir'>
       <img src=' ' alt='edit' />imprimir reporte</a>
</form>
    
";
 ?>
       
      </div>
    
  <div id="footer">
     <div class="derecha"> </div>
<!-- end #footer --></div>
<!-- end #container --></div>
	 <script>

	 </script>
</body>
</html>