<?
/*2009
 * kuraka v.7
 * http://kuraka.net 
 * #modificado    -  mmq 
 * Julio 2012 - Actualizado por NewtechPeru.com (http://NewtechPeru.com)
 */

ob_start("ob_gzhandler"); 
session_start(); 
include("../func/funciones.php");
include('login.php');
if(isset($_SESSION['carro'])) 
$carro=$_SESSION['carro'];else $carro=false; 
#$resultado=mysql_query("select * from productos order by idproductos asc"); 
?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
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
           
			$('a.zoom').easyZoom();
		 
         
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
   <div id="title">Seleccionar </div>
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
<div   id="DivBuscar"><!-- !!!!!!!!	para editar DivBuscar guias !!!!!!!!!!!!!!!!!!!!! -->
   <form name="frmbusqueda" action="" onKeyPress="buscarDato2();">
  <div align="center">Termino a buscar:
    <input type="text" name="dato" /> <a href="vender.php?<?php echo SID ?>" title="Ver seleccionados " > 
Atrás</a>
     
  </div>
</form>
<fieldset><legend>Resultado</legend>
<div id="imagenpro">imagen</div>
<div id="resultadoBusqueda"></div>

</fieldset>
   </div>
<div id="lista">
  <p ><a  href="quiroverpabloimagenes"></a></p> 
</div>
 
    
  <div id="footer">
     <div class="derecha"> </div>
<!-- end #footer --></div>
<!-- end #container --></div>
<script>

	 </script>
</body>
</html>