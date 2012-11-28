<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
include("../func/funciones.php");
?>
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){
<!--paara mostrar submenus-->
 $("#productos").click(function(evento)
      {  $("#detalle").css("display", "none"); 
	   $("#detalle2").css("display", "block");
	   	    
		  $("#submenuProducto").css("display", "block");  
          $(".opcionesMenu2").css( { color: "#FFFFFF", background: "#ACC7ED" }); 
		  $("#productos").css( { color: "#000", background: "#ACC7ED" }); 
		  $("#ocultarSubmenuProductos").css("color", "#FF0000"); 
		
		 /* $("#menuCuenta").hide("slow");*/
		  
/*		   $("#submenuProducto").animate({
         'border-bottom-width': "20",
         'font-size': '25pt'||
      });*/

 
	  });
	  
	  
	 <!--ocultarSubmenuProductos -->
 $("#ocultarSubmenuProductos").click(function(evento)
      {
		  $("#submenuProducto").css("display", "none");  
		   $("#productos").css( { color: "#000", background: "transparent" });
 
	  });	  
	  
	  
 $("#menuCuenta").click(function(evento)
      {
		  $("#detalle").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  $("#submenuProductoCuenta").css("display", "block");  
		  $("#menuCuenta").css( { color: "#000", background: "#ACC7ED" }); 
         $(".opcionesMenu2menu").css( { color: "#FFFFFF", background: "#ACC7ED" })
		   $("#ocultarSubmenuCuenta").css("color", "#FF0000"); 	
		   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	
	  
 $("#divGestionarCuenta").click(function(evento)
      {
		  $("#detalle").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  	   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	 	  
 $("#divMisDatos").click(function(evento)
      {
		  $("#detalle").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  	   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	  
	  
	  
	  
	  
	  
	   /*para mostrar el formnulario de producto*/ 
	    $("#divNuevoProducto").click(function(evento)
      {
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	     $("#detalle2").css("display", "block");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  $("#formularioProductos").css("display", "block"); 
	  $("#divNuevoProducto").css( { color: " #F90 "    });  }); 
	 <!--ocultarSubmenuMenus -->ocultarSubmenuCuenta
 $("#ocultarSubmenuCuenta").click(function(evento)
      {
		  $("#submenuProductoCuenta").css("display", "none");  
		   $("#menuCuenta").css( { color: "#000", background: "transparent" });
		   	   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
 
	  });		  
    $("#gestionarProductos").click(function(evento)
      {
		  $("#detalle2").css("display", "none");  
		  $("#gestionarProductos").css( { color: " #F90 "    });
 
	  });	
  })


     
	 
  function checkMe()/*para comparar claves nueva clave  modificar para la bd*/
{
  if (document.FormClave.PWD1.value == document.FormClave.PWD2.value)
  {
    document.FormClave.laclave.value=document.FormClave.PWD1.value;
    document.FormClave.submit();
  }
  else
    alert("Passwords no concuerdan!");
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
});
</script>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<title>Bienvenidos</title>

<link href="../incawasi/css/menu.css" rel="stylesheet" type="text/css" />
<link href="../css/menu2.css" rel="stylesheet" type="text/css" />
<link href="../incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
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
	width:200px;
	height:280px;
	float:left;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/}
 .notiDetalle{
	border: 1px solid  #dfedfe;
	padding: 3px;;
	width:550px;
	height:280px;
	float:left;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/} 
	 .notiDetalle2{
	border: 1px solid  #dfedfe;
	padding: 3px;;
	width:550px;
	height:280px;
	float: right;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/} 
 
 
 

</style> 
</head>

<body class="incawasi">

<div id="container">
  <div id="header">
  <div class="mneu_home">&nbsp;</div>
  <div class="title"></div>
<div class="logo"></div>

<div class="menu_espa"> </div>
<!-- end #header -->
</div>
  <div id="mainContent">
    <div id="contenedor_carrito">
    <div class="noti">
            <!--     para cuenta-->
        <div id="submenuProductoCuenta">
       	  <div class="opcionesMenu2menu" id="divMisDatos"> <a onclick="consultaCuenta('1')" >Mis Datos</a></div><!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
                 	<div class="opcionesMenu2menu" id="divGestionarCuenta"><a onclick="pedirDatosCuenta('1')" >Gestionar Cuenta</a></div><!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
                    <div class="opcionesMenu2menu" id="ocultarSubmenuCuenta">Ocultar</div>
                 </div>
     <!--     para cuenta-->
     <div id="submenuProducto">
   	      <div class="opcionesMenu2" id="divNuevoProducto">Nuevo Producto</div>
                 	<div class="opcionesMenu2" >Gestionar Productos</div>
                    <div class="opcionesMenu2" id="buscarProductos">Buscar Productos</div>
                    <div class="opcionesMenu2" id="verCompras" onclick="compras()">compras:</div>
                    <div class="opcionesMenu2" id="ocultarSubmenuProductos">Ocultar</div>
        </div>    
                 
      <ul id="menu">
<li><a href="#">Productos</a>
	<ul>
		<li id="gestionarProductos" onclick="gestionarP()"><a href="#">Gestionar Productos</a></li>
		<li><a href="#">Submenu 2</a></li>
		<li><a href="#">Submenu 3</a></li>
		<li><a href="#">Submenu 4</a></li>
	</ul>
</li>
<li><a href="#">Menu 2</a>
	<ul>
		<li><a href="#">Submenu 1</a></li>
		<li><a href="#">Submenu 2</a></li>
		<li><a href="#">Submenu 3</a></li>
		<li><a href="#">Submenu 4</a></li>
	</ul>
</li>
<li><a href="#">Menu 3</a>
	<ul>
		<li><a href="#">Submenu 1</a></li>
		<li><a href="#">Submenu 2</a></li>
		<li><a href="#">Submenu 3</a></li>
		<li><a href="#">Submenu 4</a></li>
	</ul>
</li>
<li><a href="#">Menu sin submenu</a></li>
</ul>      
          
    </div>
    
     <div class="notiDetalle" id="detalle"></div>
<div class="notiDetalle2" id="detalle2">
<div id="formularioProductos">
<!--formulario de registro de productos-->
<form action="RegistrandoProducto.php" method="post" enctype="multipart/form-data" >
Codigo Producto:<input type="text" name="codigoProducto" size="60" maxlength="120" value="" /> <br>
Nombre Producto:<input type="text" name="cadenatexto" size="60" maxlength="120" value="" /> <br>
<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
Unid Medida:<input type="text" name="txtund" size="10" maxlength="5" value="" /><br>
Precio:<input type="text" name="txtPrecio" size="10" maxlength="10" value="" /> <br/>
Tipo Producto:<? $consulata_tipo=dime("select idtipos_de_productos,nombre_tipo_producto from tipos_de_productos");
    echo"<select id ='tipoProductos' name='tipoProductos' class='select'>
	     <option value=''>tipo de Producto</option>";
		while($tipoPro=mysql_fetch_array($consulata_tipo)){
    	echo"<option value='".$tipoPro['idtipos_de_productos'] ."'>".$tipoPro['nombre_tipo_producto'] ."</option>";}
	echo"</select>";
?>
<br>
<b>Imagen: </b> <br/>
    <input name="file1" type="file" id="file1" /><br/> 
    <input type="submit" value="Registrar" />
</form>
<!--end- formulario de registro de productos-->
 </div></div>

<div class="notiDetalle2" id="detalle3"><!-- GESTIONARRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR -->
    <div id="contenedor_carrito">
    <? 
	include("consultarProductos.php");
	?>
    </div>
</div>
 <div id="detalle31"></div>
   </div>
  <!-- end #mainContent --></div>
  <div id="footer">
  <!--<div class="bandera"><img src="imagenes/alemania.png" width="15" height="10" /> <img src="imagenes/ingles.png" width="15" height="10" /> <img src="imagenes/peru.png" width="15" height="10" /> <img src="imagenes/italia.png" width="15" height="10" /> <img src="imagenes/japon.png" width="15" height="10" /></div>-->
    <div class="derecha"> </div>
<!-- end #footer --></div>
<!-- end #container --></div>

</body>
</html>