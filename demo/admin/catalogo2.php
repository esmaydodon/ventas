<?php 
#modificado x  www.kuraka.net  -  mmq 
ob_start("ob_gzhandler"); 
session_start(); 
include("../func/funciones.php");
if(isset($_SESSION['carro'])) 
$carro=$_SESSION['carro'];else $carro=false; 
#$resultado=mysql_query("select * from productos order by idproductos asc"); 
?> 
<html> 
<head> 
<title>CAT&Aacute;LOGO</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<link href="../css/adminPanel2.css" rel="stylesheet" type="text/css" />
 <style type="text/css"> 
 <!--
 /*
.catalogo { 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    font-size: 12px; 
    color: #333333; 
} 
.tit { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 9px; 
 color: #FFFFFF; 
} 
.prod { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 9px; 
 color: #333333; 
} 
h1 { 
 font-family: Verdana, Arial, Helvetica, sans-serif; 
 font-size: 20px; 
 color: #990000; 
} 
body{ background-color: #88C4FF;}
*/ --> 
#lista {
	float:right;
	}
	.formularioDeBusqueda{
		border: 1px solid #001;
	padding: 3px;
	width:650px;
	height:280px;
	float: left;
	margin:5px;

	margin: 15px 0px 15px 0px;	
		}
</style>
</head> 
<body> 

<div class="" id="DivBuscar"><!-- !!!!!!!!	para editar DivBuscar guias !!!!!!!!!!!!!!!!!!!!! -->
   <form name="frmbusqueda" action="" onKeyPress="buscarDatoBoleta();">
  <div align="center">Termino a buscar:
    <input type="text" name="dato" /> <a href="vercarrito2.php?<?php echo SID ?>" title="Ver seleccionados "> 
<img src="../imagenes/vercarrito.gif" width="24" height="8" border="0"></a>
  </div>
</form>
<fieldset><legend>Resultado</legend>
<div id="resultadoBusqueda"></div>
</fieldset>
   </div>
<div id="lista">
  <p ><a  href="quiroverpabloimagenes"></a></p> 
</div>
</html> 
<?php  
ob_end_flush(); 
?>