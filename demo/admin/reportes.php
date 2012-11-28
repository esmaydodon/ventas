<?
/*2009
 * kuraka v.7
 * http://kuraka.net 
 * 
 * Julio 2012 - Actualizado por NewtechPeru.com (http://NewtechPeru.com)
 */
?>
﻿
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<script type="text/javascript"> 
 $(document).ready(function(){
<!--paara mostrar submenus-->
 $("#productos").click(function(evento)
      {  $("#detalle").css("display", "none");
           $("#panel").css("display", "none");
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
          $("#panel").css("display", "none");
		  $("#submenuProducto").css("display", "none");  
                  $("#formulario-cliente-nuevo").css("display", "none");
                  $("#div-stock").css("display", "none");
		   $("#productos").css( { color: "#000", background: "transparent" });
 
	  });	  
 $("#menuCuenta").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#panel").css("display", "none");
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
          $("#panel").css("display", "none");
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
          $("#panel").css("display", "none");
		  $("#detalle").css("display", "block");   /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		  $("#detalle2").css("display", "none"); /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  $("#div-stock").css("display", "none");
                  $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
	  });	  
	/*para mostrar el formnulario de producto*/ 
	    $(".divNuevoProducto").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#panel").css("display", "none");
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
	  $(".divNuevoProducto").css( { color: " #F90 "    });  });   
	  	    $(".divNuevoProveedor").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#panel").css("display", "none");
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
		  
	  $(".divNuevoProducto").css( { color: " #F90 "    });  }); 
      
      //nuevo cliente 
      	  	    $("#divNuevoCliente").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#panel").css("display", "none");
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
	  $(".divNuevoProducto").css( { color: " #F90 "    });  }); 
      //nuevlo cliente end
	 <!--ocultarSubmenuMenus -->ocultarSubmenuCuenta
 $("#ocultarSubmenuCuenta").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#panel").css("display", "none");
		  $("#submenuProductoCuenta").css("display", "none"); 
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle73").css("display", "none"); 
		    $("#detalle7").css("display", "none"); 
                    $("#div-stock").css("display", "none");
                    		   $("#menuCuenta").css( { color: "#000", background: "transparent" });
		   	   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
 
	  });		  
    $(".gestionarProductos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		  $("#detalle73").css("display", "none");
                  $("#panel").css("display", "none");
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
		  $(".gestionarProductos").css( { color: " #F90 "    });
 
	  });	  
	  $(".gestionartipoProductos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none");  
		  $("#detalle73").css("display", "none");
                  $("#panel").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		   $("#detalle72").css("display", "none");	   
		   $("#detalle7").css("display", "none");
		  		$("#detalle6").css("display", "none");
		$("#detalle62").css("display", "none");
                $("#div-stock").css("display", "none");
		  $("#detalle4").css("display", "block"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle3").css("display", "block");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });		  
	    $(".buscarProductos").click(function(evento)
      {
		    $("#detalle73").css("display", "none");
                    $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle72").css("display", "none");
                  $("#panel").css("display", "none");
		  $("#detalle7").css("display", "none");
		$("#DivBuscar").css("display", "block");
                $("#div-stock").css("display", "none");
          $("#detalle2").css("display", "none"); 
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "block");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
		  
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });  
	  $(".gestionarProvedores").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		  $("#detalle73").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle7").css("display", "none");
		  $("#detalle72").css("display", "none");
                  $("#panel").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "block");
		   $("#detalle72").css("display", "none");	
                   $("#div-stock").css("display", "none");
		    $("#detalle7").css("display", "none");
		  $("#detalle3").css("display", "block");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });		  
	   $("#divNuevaGuia").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "block");
                   $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });		  
	     $("#gestionarGuias").click(function(evento)
      {$("#DivBuscar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#panel").css("display", "none");
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
                   $("#panel").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#detalle72").css("display", "none");
		   $("#div-stock").css("display", "block");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });
          //stock producxtos END
          /*para icomenu-productos, menu1*/
    $("#icomenu-productos").click(function(evento)
      {$("#icomenu-proveedores").css("display", "none");
          $(".icomenu2-productos").css("display", "block");
          $(".icomenu2-proveedores").css("display", "none");
		  $("#icomenu-clientes").css("display", "none"); 
                  $("#icomenu-guias").css("display", "none");
                  $("#icomenu-reportes").css("display", "none");  
	  });
	  /*para icomenu-proveedores, menu1*/
	      $("#icomenu-proveedores").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-proveedores").css("display", "block");
		  $("#icomenu-clientes").css("display", "none"); 
                  $("#icomenu-guias").css("display", "none");
                  $("#icomenu-reportes").css("display", "none"); 
	  });
	  	  /*para icomenu-clientes, menu1*/
	      $("#icomenu-clientes").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-guias").css("display", "none");
                  $("#icomenu-reportes").css("display", "none"); 
	  });
	  	  	  /*para icomenu-guias, menu1*/
	      $("#icomenu-guias").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-reportes").css("display", "none"); 
	  });	  	
              /*para icomenu-reportes, menu1 481
	      $("#icomenu-reportes").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");//icomenu2-productos es para la calse de los botones
          $(".icomenu2-proveedores").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-guias").css("display", "none"); 
	  });*/
          /*para icomenu-productos, menu1 END*/
          //cargar imagen producto
         
   $("#im").click(function(event){
     alert("Este mensaje se muestra cuando el usuario pincha en el enlace");
     event.preventDefault();
   });
   
 
          //cargar imagen del producto end  ... mq

	    $("#pedir").click(function(evento)
      {

		  $("#detalle5").css("display", "none");

	  }); 
          //para imagen
         
       
   //para calendario mq
     $("#campofecha").datepicker({
      showOn: 'both',
      buttonImage: 'imagenes/panel/calendar.png',
      buttonImageOnly: true,
      changeYear: true,
      numberOfMonths: 2
   });
   $("#campofecha").datepicker( "option", "changeMonth", true );

 $("#campofecha2").datepicker({
      showOn: 'both',
      buttonImage: 'imagenes/panel/calendar.png',
      buttonImageOnly: true,
      changeYear: true,
      numberOfMonths: 2
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
<script type="text/javascript" src="../js/icomenu1.js"></script>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<title>Bienvenidos</title>
<link href="../css/menu2.css" rel="stylesheet" type="text/css" />
<link href="../css/jquery-ui-1.8.21.custom.css" rel="stylesheet" type="text/css">
</link>
<link href="../incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
<link href="../css/adminPanel2.css" rel="stylesheet" type="text/css" />
<style type="text/css"></style>
</head>
<body class="incawasi">
<div id="header">
  <!-- #header-->
  <div id="title">titulo</div>
  <div id="logo"> <a href="panel.php"><img src="imagenes/logo.jpg" width="208" height="73" /></a></div>
  <div   style="position:absolute; width: 100px; left: 704px; top: 22px;">
    <? require ('ya.php'); ?>
  </div>
</div>
<!-- end #header -->
<div id="menumain" style="margin: auto;">
  <!-- end #header -->
</div>
<!---->
<div id="mainContent">
  <div id="contenedor_carrito">
    <div class="noti">
      <!--     para cuenta-->
      <!--     <div class="opcionesMenu" id="menuCuenta">cuenta</div>para cuenta-->
      <div id="submenuProductoCuenta">
        <div class="opcionesMenu2menu" id="divMisDatos"> <a onclick="consultaCuenta('1')" >Mis Datos</a></div>
        <!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
        <div class="opcionesMenu2menu" id="divGestionarCuenta"><a onclick="pedirDatosCuenta('1')" >Gestionar Cuenta</a></div>
        <!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
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
            <li class="divNuevoProducto"><a href="#">Registrar  Producto</a></li>
            <li class="gestionarProductos" onclick="gestionarP()"><a href="#">Editar Productos</a></li>
            <li class="gestionartipoProductos" onclick="gestionartipoP()"><a href="#">Editar Categorias </a></li>
            <li class="buscarProductos" ><a href="#">Buscar Productos</a></li>
          </ul>
        </li>
        <li><a href="#">Proveedores</a>
          <ul>
            <li class="divNuevoProveedor"><a href="#">Nuevo Proveedor</a></li>
            <li class="gestionarProvedores" onclick="gestionarPro()"><a href="#">Gestionar Proveedores</a></li>
          </ul>
        </li>
        <li><a href="#">Clientes</a>
          <ul>
            <li id="divNuevoCliente"><a href="#">Nuevo Cliente</a></li>
            <li class="gestionarProvedores" onclick="gestionarCliente()"><a href="#">Gestionar Clientes</a></li>
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
          </ul>
        </li>
      </ul>
    </div>
    <div id="panel" class="panel" ><span class="menu1" id="icomenu-proveedores"><img src="imagenes/panel/proveedores.png" width="175" height="150" /></span>
      <div class="icomenu2-productos"> <a  class="button mediano azul" href="#"><span class="divNuevoProducto" >Registrar  Producto</span></a> <a  class="button mediano azul" href="#"><span class="gestionarProductos" onclick="gestionarP()">Editar Productos</span></a> <a  class="button mediano azul" href="#"><span class="buscarProductos" >Buscar Producto</span></a> <a  class="button mediano azul" href="#"><span class="gestionartipoProductos" onclick="gestionartipoP()">Gestionar Categoria</span></a> </div>
      <div class="icomenu2-proveedores"> <a  class="button mediano azul" href="#"><span class="divNuevoProveedor" >Proveedor Nuevo</span></a> <a  class="button mediano azul" href="#"><span class="gestionarProvedores" onclick="gestionarPro()">Gestionar Producto</span></a> </div>
    </div>
    <div class="notiDetalle" id="detalle"></div>
    <div class="notiDetalle2" id="detalle3" style="border: 0px;">
      <!-- !!!!!!!!	detalle3 !!!!!!!!!!!!!!!!!!!!! -->
    </div>
    <div class="notiDetalle2" id="detalle5">
      <!-- !!!!!!!!	para editar producto !!!!!!!!!!!!!!!!!!!!! -->
    </div>
    <div class="notiDetalle3" id="div-stock"> <img src="imagenes/stock.jpg" width="650px" height="280px" /> </div>
    <!-- nuevo cliente -->
    <!-- nuevo cliente END-->
    <!-- end #mainContent -->
  </div>
  <div id="footer">
    <!--<div class="bandera"><img src="imagenes/alemania.png" width="15" height="10" /> <img src="imagenes/ingles.png" width="15" height="10" /> <img src="imagenes/peru.png" width="15" height="10" /> <img src="imagenes/italia.png" width="15" height="10" /> <img src="imagenes/japon.png" width="15" height="10" /></div>-->
    <div class="derecha"> </div>
    <!-- end #footer -->
  </div>
  <!-- end #container -->
</div>
</body>
</html>
