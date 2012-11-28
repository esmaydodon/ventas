<?php 
session_start(); 
$cliente=$_SESSION['cliente']; 
include('login.php');
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
include("../func/funciones.php");
?>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){
	 $("#nuevoClienteLink").click(function(evento)
      {   $("#divFormularioVentasCliente").css("display", "block");	
	   $("#linkCerrar").css("display", "block");  });
	 $("#linkCerrar").click(function(evento)
      {   $("#divFormularioVentasCliente").css("display", "none");	
	   $("#linkCerrar").css("display", "none");  });   
	   
	   
	  }) 
	
 </script>
<title>Bienvenidos</title>
<link href="../incawasi/css/menu.css" rel="stylesheet" type="text/css" />
 <link href="../css/adminPanel2.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#contenedor_carrito{
	font-size:11pt;
	text-align: left;
	background-color:#fff;
	width: 798px;
	height:600px;
	margin:auto;/*"auto", para que Mozilla y otros navegadores centren la capa*/    /*border: 2px solid #cccccc;*/
	border: 1px solid  #dfedfe;
	font: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}

 .noti{
	border: 1px solid  #dfedfe;
	padding: 3px;;
	width:350px;
	height:280px;
	float:left;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/}
 
.noti img{
	border: 0px;
	float:left;
	margin: 2px 7px 2px 0px;
	}	
.noti-pie{clear:both;}
.noti-pie img{ margin: 1px;}
.columna_derecha{
	float:left;
	width:250px;
	height:850px;
	background: #000/* url(imagenes/8.jpg) repeat-x;*/
}  
#noticias{ width:600px;
height:200px;}
#videos{ float: left;}
#pie{color:#AAA; font-size:10pt;
margin: 0px;
padding: 0px;
width: 100%;
background:  #000  url(../../imagenes/bg-footer.png) repeat-x;
clear:both;}
.noti-pie{ width:100%; height:50px; margin-right:0px;}
a:link {
	color: #325E94;
}
a:visited {
	color: #4A4A4A;
}
#articulos{
	width:700px;
	height:728px;
}
.clearfloat { /* esta clase debe colocarse en un elemento div o break y debe ser el último elemento antes del cierre de un contenedor que incluya completamente a un elemento flotante */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}

#divFormularioVentasCliente { /* esta clase debe colocarse en un elemento div o break y debe ser el último elemento antes del cierre de un contenedor que incluya completamente a un elemento flotante */
display:none;
}
#linkCerrar { 
display:none;
}</style> 
</head>

<body class="incawasi">
<? require ('ya.php'); ?>
<div id="container">
  <div id="mainContent">
    <div style="padding:10px 0px 0px 0px">
      <div style=" padding:10px 0px 10px 300px; font-size:24px; -moz-border-radius:3px;  border-radius:3px; width:400px; float:left; ">
      
        <form name="frmbusqueda2"  onKeyPress="buscarClienteFactura();">
    Buscar Cliente:
  <input type="text" name="dato" id="dato"/></form>
 <fieldset><legend>Resultado</legend> <div id="resultadoBusqueda2"></div></fieldset>
                  <div id="divFormularioAdministar">
                  <?php 
if($cliente){
	 foreach($cliente as $k => $c){
		 echo"Cliente:".$c['nombre_cliente']."<br>";
		   echo"Ruc:".$c['ruc']."<br>";
		  echo"Direccion:".$c['direccion_cliente']; }
	 }
?>
                  </div>
      </div> <div id="buscadorProductos" style="float:left;">
       <form name="frmbusqueda" action="" onKeyPress="buscarDato22();">
  <div align="center">Termino a buscar:
    <input type="text" name="dato" />
  </div>
</form>
<fieldset><legend>Resultado</legend>
<div id="resultadoBusqueda"></div>
</fieldset>
      </div>
          <div style=" padding:10px 0px 10px 300px; font-size:24px; -moz-border-radius:3px;  border-radius:3px; clear:both;">
            <a id="nuevoClienteLink" href="#"  style="text-decoration:none;cursor:pointer; background:#7da7d9; ">Nuevo Cliente</a> 
            <a id="linkCerrar" href="#"  style="text-decoration:none;cursor:pointer; background:#7da7d9; ">X</a> 
             <div id="divFormularioVentasCliente">
            <form action="registrandoCliente.php" method="post">
             Ruc:<input type="text" name="ruc_text" /><br/>
             DNI Cliente:<input type="text" name="dni_cliente_text" /><br/>
           Nombre Cliente:<input type="text" name="nombre_cliente_text" /><br/>
           Direccion:<input type="text" name="direccion_text" />
            <input type="submit" name="Submit" value="Ingresar" />	
            </form> 
            </div>
            
    </div> <div style=" padding:10px 0px 10px 300px; font-size:24px; -moz-border-radius:3px;  border-radius:3px;">
      

                  <div id="emitirDiv" style=" width:300px">
                 <div style="float:left; margin-right:30px;"><a href="vercarrito.php">Factura</a></div>
                 <div style="float:left;margin-right:30px;"><a href="vercarrito2.php">Boleta</a></div>
                 <div style="float:left;"><a href="vercarrito3.php">Contratos</a></div>
                  </div>
      </div></div>
  <!-- end #mainContent --></div>
<!-- end #container --></div>
<!--<ul>
<li>Productos</a>
	<ul>
		<li>Nuevo Producto / Categoria</li>
		<li>Gestionar Productos</li>
                <li>Categorias Productos </li>
		<li>Buscar Productos</li>
	</ul>
</li>
<li>Menu 2
	<ul>
		<li>Submenu 1</li>
		<li>Submenu 2</li>
		<li>Submenu 3</li>
		<li>Submenu 4</li>
	</ul>
</li>
<li>Menu 3
	<ul>
		<li>Submenu 1</li>
		<li>Submenu 2</li>
		<li>Submenu 3</li>
		<li>Submenu 4</li>
	</ul>
</li>
<li><a href="#">Menu sin submenu</a></li>
</ul>-->

</body>
</html>