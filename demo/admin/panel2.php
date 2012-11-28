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
<script type="text/javascript"> 
 $(document).ready(function(){
<!--paara mostrar submenus-->
 $("#productos").click(function(evento)
      {  $("#detalle").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
	  $("#DivBuscar").css("display", "none");
          $("#div-stock").css("display", "none");
	   $("#detalle2").css("display", "block");	
	   $("#submenuProducto").css("display", "block");  
	    $("#detalle3").css("display", "none"); 
		$("#detalle4").css("display", "none"); 
	   $(".opcionesMenu2").css( { color: "#FFFFFF", background: "#ACC7ED" }); 
		 /* $("#productos").css( { color: "#000", background: "#ACC7ED" });*/ 
		  $("#ocultarSubmenuProductos").css("color", "#FF0000"); 
 /* $("#menuCuenta").hide("slow");*/
		  
/*		   $("#submenuProducto").animate({
         'border-bottom-width': "20",
         'font-size': '25pt'||
      });*/

 
	  });
	 <!--ocultarSubmenuProductos -->
 $("#ocultarSubmenuProductos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#submenuProducto").css("display", "none");  
                  $("#formulario-cliente-nuevo").css("display", "none");
                  $("#div-stock").css("display", "none");
		   $("#productos").css( { color: "#000", background: "transparent" });
 
	  });	  
 $("#menuCuenta").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle").css("display", "block");  
		  $("#submenuProductoCuenta").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		   $("#div-stock").css("display", "none");
                   $("#menuCuenta").css( { color: "#000", background: "#ACC7ED" }); 
         $(".opcionesMenu2menu").css( { color: "#FFFFFF", background: "#ACC7ED" })
		   $("#ocultarSubmenuCuenta").css("color", "#FF0000"); 	
		   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	
 $("#divGestionarCuenta").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  $("#div-stock").css("display", "none");
                  $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	 	  
 $("#divMisDatos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  $("#div-stock").css("display", "none");
                  $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	  
	/*para mostrar el formnulario de producto*/ 
	    $("#divNuevoProducto").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	    $("#div-stock").css("display", "none");
            $("#detalle2").css("display", "block");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		 $("#formularioProductos").css("display", "block"); 
		 $("#detalle73").css("display", "none");
		 $("#detalle72").css("display", "none");	  
		 $("#detalle7").css("display", "none");
		$("#detalle3").css("display", "none");
		$("#detalle4").css("display", "none");
		$("#detalle5").css("display", "none");
		$("#detalle6").css("display", "none");
		$("#detalle62").css("display", "none");
	  $("#divNuevoProducto").css( { color: " #F90 "    });  });   
	  	    $("#divNuevoProveedor").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	     $("#detalle2").css("display", "none");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ $("#detalle73").css("display", "none");
		$("#detalle3").css("display", "none");
                $("#formulario-cliente-nuevo").css("display", "none");
		$("#detalle4").css("display", "none");
		$("#detalle5").css("display", "none");
                $("#div-stock").css("display", "none");
		$("#detalle6").css("display", "block");
		$("#formularioProveedores").css("display", "block");
		 $("#detalle73").css("display", "none");
		 $("#detalle62").css("display", "none");
		 $("#detalle72").css("display", "none");
		  
	  $("#divNuevoProducto").css( { color: " #F90 "    });  }); 
      
      //nuevo cliente 
      	  	    $("#divNuevoCliente").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		   $("#detalle73").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#detalle72").css("display", "none");
		   $("#div-stock").css("display", "none");
		  $("#formulario-cliente-nuevo").css("display", "block");
	  $("#divNuevoProducto").css( { color: " #F90 "    });  }); 
      //nuevlo cliente end
	 <!--ocultarSubmenuMenus -->ocultarSubmenuCuenta
 $("#ocultarSubmenuCuenta").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#submenuProductoCuenta").css("display", "none"); 
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle73").css("display", "none"); 
		    $("#detalle7").css("display", "none"); 
                    $("#div-stock").css("display", "none");
                    		   $("#menuCuenta").css( { color: "#000", background: "transparent" });
		   	   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
 
	  });		  
    $("#gestionarProductos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		  $("#detalle73").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle7").css("display", "none");  
		  $("#detalle4").css("display", "none");
		  		$("#detalle6").css("display", "none");
		$("#detalle62").css("display", "none");
		  //$("#formularioCategorias").css("display", "block");
		  $("#detalle5").css("display", "block");
                  $("#div-stock").css("display", "none");
		  $("#detalle3").css("display", "block");
			//	  $("#detalle3").css( { height: " 500px	"    });
		  $("#gestionarProductos").css( { color: " #F90 "    });
 
	  });	  
	  $("#gestionartipoProductos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none");  
		  $("#detalle73").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		   $("#detalle72").css("display", "none");	   
		   $("#detalle7").css("display", "none");
		  		$("#detalle6").css("display", "none");
		$("#detalle62").css("display", "none");
                $("#div-stock").css("display", "none");
		  $("#detalle4").css("display", "block"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle3").css("display", "block");
		  $("#gestionartipoProductos").css( { color: " #F90 "    });
 
	  });		  
	    $("#buscarProductos").click(function(evento)
      {
		    $("#detalle73").css("display", "none");
                    $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle72").css("display", "none");	   
		  $("#detalle7").css("display", "none");
		$("#DivBuscar").css("display", "block");
                $("#div-stock").css("display", "none");
          $("#detalle2").css("display", "none"); 
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "block");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
		  
		  $("#gestionartipoProductos").css( { color: " #F90 "    });
 
	  });  
	  $("#gestionarProvedores").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		  $("#detalle73").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle7").css("display", "none");
		  $("#detalle72").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "block");
		   $("#detalle72").css("display", "none");	
                   $("#div-stock").css("display", "none");
		    $("#detalle7").css("display", "none");
		  $("#detalle3").css("display", "block");
		  $("#gestionartipoProductos").css( { color: " #F90 "    });
 
	  });		  
	   $("#divNuevaGuia").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		   $("#detalle73").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "block");
                   $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $("#gestionartipoProductos").css( { color: " #F90 "    });
 
	  });		  
	     $("#gestionarGuias").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
                  $("#div-stock").css("display", "none");
		  $("#detalle7").css("display", "block");
		  $("#detalle72").css("display", "block");
		    $("#detalle73").css("display", "block");
	  });  
          //stockk productos
          	   $("#stock-productos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		   $("#detalle73").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#detalle72").css("display", "none");
		   $("#div-stock").css("display", "block");
		  $("#gestionartipoProductos").css( { color: " #F90 "    });
 
	  });
          //stock producxtos END

	    $("#pedir").click(function(evento)
      {

		  $("#detalle5").css("display", "none");

	  }); 
	  
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
</script>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<title>Bienvenidos</title>
 

<link href="../css/menu2.css" rel="stylesheet" type="text/css" />
<link href="../incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
<link href="../css/adminPanel2.css" rel="stylesheet" type="text/css" />
<style type="text/css">

</style> 
</head>

<body class="incawasi">
<div id="header">
   <div class="title"></div>
<div class="logo"></div>

<div class="menu_espa"> </div>
<!-- end #header -->
</div>
<!---->
<div id="menumain" style="margin: auto;">
  <div id="ya" style="  "><? require ('ya.php'); ?></div>
<!-- end #header -->
</div>
<!---->
<div id="container">
  
  <div id="mainContent">
    <div id="contenedor_carrito">
    <div class="noti">
            <!--     para cuenta-->
                    <!--     <div class="opcionesMenu" id="menuCuenta">cuenta</div>para cuenta-->
                 <div id="submenuProductoCuenta">
                 	<div class="opcionesMenu2menu" id="divMisDatos"> <a onclick="consultaCuenta('1')" >Mis Datos</a></div><!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
                 	<div class="opcionesMenu2menu" id="divGestionarCuenta"><a onclick="pedirDatosCuenta('1')" >Gestionar Cuenta</a></div><!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
                    <div class="opcionesMenu2menu" id="ocultarSubmenuCuenta">Ocultar</div>
                 </div>
     <!--     para cuenta-->
                               <div id="submenuProducto">
                    <div class="opcionesMenu2" id="verCompras" onclick="compras()">compras:</div>
                    <div class="opcionesMenu2" id="ocultarSubmenuProductos">Ocultar</div>
                 </div>    
                 
      <ul id="menu">
<li><a href="#">Productos</a>
	<ul>
		<li id="divNuevoProducto"><a href="#">Nuevo Producto / Categoria</a></li>
		<li id="gestionarProductos" onclick="gestionarP()"><a href="#">Gestionar Productos</a></li>
        <li id="gestionartipoProductos" onclick="gestionartipoP()"><a href="#">Gestionar Categorias </a></li>
		<li id="buscarProductos" ><a href="#">Buscar Productos</a></li>
	</ul>
</li>
<li><a href="#">Proveedores</a>
	<ul>
		<li id="divNuevoProveedor"><a href="#">Nuevo Proveedor</a></li>
		<li id="gestionarProvedores" onclick="gestionarPro()"><a href="#">Gestionar Proveedores</a></li>
	</ul>
</li>
 <li><a href="#">Clientes</a>
	<ul>
		<li id="divNuevoCliente"><a href="#">Nuevo Cliente</a></li>
		<li id="gestionarProvedores" onclick="gestionarCliente()"><a href="#">Gestionar Clientes</a></li>
	</ul>
</li>         
<li><a href="#">Guias</a>
	<ul>
		<li id="divNuevaGuia"><a href="#">Nueva guia</a></li>
		<li id="gestionarGuias" onclick="gestionarGui()"><a href="#">Gestionar Guias</a></li>
	</ul>
</li>
<li><a href="#">Reportes</a>
	<ul>
		<li id="stock-productos"><a href="#">Stock de Productos</a></li>
		<li id="gestionarGuias" onclick="gestionarGui()"><a href="#">Gestionar Guias</a></li>
	</ul></li>
</ul>      
          
    </div>
    
     <div class="notiDetalle" id="detalle"></div>
<div class="notiDetalle2" id="detalle2">
<div id="formularioProductos"><!--formulario de registro de productos-->
<form action="RegistrandoProducto.php" method="post" enctype="multipart/form-data" >
N° Guia:<? $consulata_guia=dime("select idguias,numero_guia from guias order by  idguias desc");
    echo"<select id ='guias1' name='guias1' class='select'>
	     <option value=''>Seleccione</option>";
		while($tipoProg=mysql_fetch_array($consulata_guia)){
    	echo"<option value='".$tipoProg['idguias'] ."'>".$tipoProg['numero_guia'] ."</option>";}
	echo"</select>";?> Nueva Guia <br>
Codigo Producto:<input type="text" name="codigoProducto" size="60" maxlength="120" value="" /> <br>
Nombre Producto:<input type="text" name="cadenatexto" size="60" maxlength="120" value="" /> <br>
<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
Unid Medida:<input type="text" name="txtund" size="10" maxlength="5" value="" />
Medidas:<input type="text" name="txtmedidas" size="10" maxlength="5" value="" /><br>
Precio:<input type="text" name="txtPrecio" size="10" maxlength="10" value="" /> 
Precio ML:<input type="text" name="txtPrecioM2" size="10" maxlength="10" value="" /> 
Precio Mayorista:<input type="text" name="txtPrecioMayorista" size="10" maxlength="10" value="" /> <br/>
Categoria:<? $consulata_tipo=dime("select idtipos_de_productos,nombre_tipo_producto from tipos_de_productos order by  idtipos_de_productos desc");
    echo"<select id ='tipoProductos' name='tipoProductos' class='select'>
	     <option value=''>Categoria</option>";
		while($tipoPro=mysql_fetch_array($consulata_tipo)){
    	echo"<option value='".$tipoPro['idtipos_de_productos'] ."'>".$tipoPro['nombre_tipo_producto'] ."</option>";}
	echo"</select>";?>
<br>
Cantidad:<input type="text" name="txtCantidad" size="10" maxlength="10" value="" /> <br/>
<b>Imagen: </b> <br/>
    <input name="file1" type="file" id="file1" /><br/> 
    <input type="submit" value="Registrar" />
</form>
 </div>
 <div id="formularioCategorias"><!--fFORMULARIO CATEGORIAS-->
<form action="RegistrandoCategorias.php" method="post" enctype="multipart/form-data" >
Nombre Categoria:<input type="text" name="txtNombreCategoria" size="60" maxlength="120" value="" /> <br>
Sub Categoria:<? $consulata_tipo=dime("select idtipos_de_productos,nombre_tipo_producto from tipos_de_productos  order by  idtipos_de_productos desc");
    echo"<select id ='subCategria' name='subCategria' class='select'>
	     <option value='0'>0</option>";
		while($tipoPro=mysql_fetch_array($consulata_tipo)){
    	echo"<option value='".$tipoPro['idtipos_de_productos'] ."'>".$tipoPro['nombre_tipo_producto'] ."</option>";}
	echo"</select><br>";
?>
Categoria:<? $consulata_tipo=dime("select idtipos_de_productos,nombre_tipo_producto from tipos_de_productos order by  idtipos_de_productos desc");
    echo"<select id ='categria' name='categria' class='select'>
	     <option value='0'>0</option>";
		while($tipoPro=mysql_fetch_array($consulata_tipo)){
    	echo"<option value='".$tipoPro['idtipos_de_productos'] ."'>".$tipoPro['nombre_tipo_producto'] ."</option>";}
	echo"</select>";
?>
<br>
<!--############################################combos anidados##################-->
<?php
$consulata_tipo2=dime("select idtipos_de_productos,nombre_tipo_producto from tipos_de_productos order by  idtipos_de_productos desc") or die(ovni("panel2.php"));
    echo"<select id ='select1' name='select1' class='select'>
	     <option value='0'>0</option>";
		while($tipoPro2=mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$tipoPro2['idtipos_de_productos'] ."'>".$tipoPro2['nombre_tipo_producto'] ."</option>";}
	echo"</select>";
?>
</select>
<select name="select2" id="select2">
<option selected value="0">Seleccione</option>
</select>
<!--end ############################################combos anidados##################end-->
    <input type="submit" value="Registrar" />
</form>
 </div>
 </div>
 <div class="notiDetalle2" id="detalle6"><!-- !!!!!!!!	FORMULARIO PROVEEDORES !!!!!!!!!!!!!!!!!!!!! -->
 <form action="RegistrandoProveedor.php" method="post">
N° Ruc:<input type="text" name="RucProvedor" size="15" maxlength="15" value="" /> Nueva Guia <br>
Nombre:<input type="text" name="textNomProvedor" size="60" maxlength="120" value="" /> <br>
Telefono:<input type="text" name="textTeleProvdor" size="60" maxlength="120" value="" /> <br>
Descripcion:<br><textarea name="textDescriProvedor" id="textDescriProvedor" cols="60" rows="10" tabindex="4">
</textarea>
<br>
    <input type="submit" value="Registrar" />
</form>
 </div>
  <div class="notiDetalle2" id="detalle7"><!-- !!!!!!!!	para editar guias !!!!!!!!!!!!!!!!!!!!! -->
  <form action="RegistrandoGuia.php" method="post">
N°:<input type="text" name="numeroguia" size="15" maxlength="15" value="" /> Nueva Guia <br>
Fecha:<input type="text" name="textfechaguia" size="60" maxlength="120" value="" /> <br>
Proveedor:<?php
$consulata_tipo2=dime("select idproveedor,nombre_proveedor from  proveedor order by  idproveedor desc");
    echo"<select id ='provedor' name='provedor' class='select'>
	     <option value='0'>Seleccione</option>";
		while($provedor=mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$provedor['idproveedor'] ."'>".$provedor['nombre_proveedor'] ."</option>";}
	echo"</select>";
?> 
<br>
    <input type="submit" value="Registrar" />
</form>
  </div>
  <div  class="notiDetalle2" id="editarbuscando"></div>
   <div class="notiDetalle2" id="detalle5"><!-- !!!!!!!!	para editar producto !!!!!!!!!!!!!!!!!!!!! --></div>
   <div class="notiDetalle2" id="DivBuscar"><!-- !!!!!!!!	para editar DivBuscar guias !!!!!!!!!!!!!!!!!!!!! -->
   <form name="frmbusqueda" action="" onkeypress="buscarDato();">
  <div align="center">Termino a buscar:
    <input type="text" name="dato" /> 
  </div>
</form>
<fieldset><legend>Resultado</legend>
<div id="resultadoBusqueda" style=" background-color:#ffffff;"></div>
</fieldset>
   </div>
   <div class="notiDetalle2" id="detalle73"><!-- !!!!!!!!	para editar producto !!!!!!!!!!!!!!!!!!!!! --></div>
   <div class="notiDetalle2" id="detalle72"><!-- !!!!!!!!	para editar producto !!!!!!!!!!!!!!!!!!!!! --></div>
 <div class="notiDetalle2" id="detalle62"><!-- !!!!!!!!	para editar producto !!!!!!!!!!!!!!!!!!!!! --></div>

<div class="notiDetalle2" id="detalle4"><!-- !!!!!!!!	para editar tipo de producto !!!!!!!!!!!!!!!!!!!!! --></div>
<div class="notiDetalle2" id="detalle3"><!-- !!!!!!!!	detalle3 !!!!!!!!!!!!!!!!!!!!! --></div> 


 <div id="detalle31"></div>
<div class="notiDetalle3" id="div-stock">
<img src="imagenes/stock.jpg" width="650px" height="280px" />
</div>
 <!-- nuevo cliente -->
 <div id="formulario-cliente-nuevo" class="notiDetalle3">
 <form action="registrandoCliente.php" method="post" enctype="multipart/form-data" >
Nombre :<input type="text" name="nombre" size="60" maxlength="120" value="" /> <br>
Nombre Comercial:<input type="text" name="nombrecomercial" size="60"  value="" /><br>
DNI:<input type="text" name="dni" size="10" maxlength="5" value="" /><br>
RUC:<input type="text" name="ruc" size="10" maxlength="10" value="" /> <br>
Direccion:<input type="text" name="direccion" size="50" maxlength="50" value="" /><br> 
Telefono1:<input type="text" name="telefono1" size="15" maxlength="15" value="" /> <br/>
Telefono2:<input type="text" name="telefono2" size="15" maxlength="20" value="" /> <br/>
Email:<input type="text" name="email" size="10" maxlength="20" value="" /> <br/>
Web:<input type="text" name="web" size="10" maxlength="20" value="" /> <br/>
     <input type="submit" value="Registrar" />
</form>
    </div>
 <!-- nuevo cliente END-->
  <!-- end #mainContent --></div>
  <div id="footer">
  <!--<div class="bandera"><img src="imagenes/alemania.png" width="15" height="10" /> <img src="imagenes/ingles.png" width="15" height="10" /> <img src="imagenes/peru.png" width="15" height="10" /> <img src="imagenes/italia.png" width="15" height="10" /> <img src="imagenes/japon.png" width="15" height="10" /></div>-->
    <div class="derecha"> </div>
<!-- end #footer --></div>
<!-- end #container --></div>

</body>
</html>