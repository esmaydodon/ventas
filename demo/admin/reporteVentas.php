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
 
     
     
    <form id="fechaventasreporte" name="entrefechas" action="alphabarex1.php" method="GET"  class="contacto">
        Fecha de Ingreso:<input size="10" style="width: 70px;" type="text" name="f1" class="campofecha"></input> 
        Fecha de Caducidad:<input size="10" style="width: 70px;" type="text" name="f2" class="campofecha"></input>
        <input type='hidden' name='parametros' value='2'></input>
        <input type="submit" value="Consultar" onclick=" " />
    </form>    
   
       
      </div>
    
  <div id="footer">
     <div class="derecha"> </div>
<!-- end #footer --></div>
<!-- end #container --></div>
	 <script>

	 </script>
</body>
</html>