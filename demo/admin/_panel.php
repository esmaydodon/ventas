<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie9 ie8 ie7 ie6" lang="es"><![endif]-->
<!--[if IE 7]><html class="ie9 ie8 ie7" lang="es"><![endif]-->
<!--[if IE 8]><html class="ie9 ie8" lang="es"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="es"><![endif]-->
<!--[if gt IE 9]><!-->
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
<!--paara mostrar submenus-->
 $("#productos").click(function(evento)
      {  $("#detalle").css("display", "none");
          $("#listacliente-editar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
           $("#detalle").css("display", "none");
          $("#formularioServicios").css("display", "none");
          $("#editServicios").css("display", "none");
                   $("#listarServicios").css("display", "none");
          $("#listacliente").css("display", "none");
           $("#panel").css("display", "none");
           $("#productos_caducos").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
          $("#formularioPersonal").css("display", "none");
          $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
          $("#formularioDocumentos").css("display", "none");
          	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                     $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
          $("#editDocumentos").css("display", "none");
	  $("#DivBuscar").css("display", "none");
          $("#listarDocumentos").css("display", "none");
          $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $("#formularioLocalUsuario").css("display", "none");$(".menu1").css("display", "none");
          
          $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
          $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");  
               $("#formularioreportesFechasVentas").css("display", "none");
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
          $("#formularioServicios").css("display", "none");
           $("#detalle").css("display", "none");
          $("#listacliente").css("display", "none");
          $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#productos_caducos").css("display", "none");
		  $("#submenuProducto").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                  	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                     $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  $("#div-stock").css("display", "none");
                  $("#editDocumentos").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
              $(".menu1").css("display", "none");
              $("#formularioreportesFechasVentas").css("display", "none");
              $("#formularioLocalUsuario").css("display", "none");
              $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
		   $("#productos").css( { color: "#000", background: "transparent" });
 
	  });	  
 $("#menuCuenta").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#panel").css("display", "none");
          $("#listacliente-editar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
           $("#detalle").css("display", "none");
          $("#formularioServicios").css("display", "none");
                    $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
          $("#listacliente").css("display", "none");
          $("#productos_caducos").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
           $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
          $("#formularioDocumentos").css("display", "none");
          	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                $("#listarDS").css("display", "none");
                $("#formularioPersonal").css("display", "none");
                   $("#editDS").css("display", "none"); 
                   $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                    $("#formularioreportesFechasVentas").css("display", "none");
              $("#formularioDS").css("display", "none");    
          $("#listarDocumentos").css("display", "none");
          $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $("#listarPago").css("display", "none");
          $(".menu1").css("display", "none");
					$("#listarDetallePago").css("display", "none");
          $("#formularioLocalUsuario").css("display", "none");
          $("#editDocumentos").css("display", "none");
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
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "none");
		  $("#detalle4").css("display", "none");  
		  $("#detalle5").css("display", "none"); 
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                   	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                     $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#listarDS").css("display", "none");//$("#listarDS").css("display", "none")
                   $("#listarDocumentos").css("display", "none");
                   $("#detalle").css("display", "block");
                   $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                   $("#formularioLocalUsuario").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $(".menu1").css("display", "none");
                   $("#editServicios").css("display", "none");
                   $("#formularioreportesFechasVentas").css("display", "none");
                   $("#editDS").css("display", "none");
                   $("#formularioDS").css("display", "none");    
                    $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
	  });	 	  
 $("#divMisDatos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#listacliente-editar").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
          $("#formularioDocumentos").css("display", "none");
          $("#formularioPersonal").css("display", "none");
           $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
          $("#listarPer").css("display", "none");
          	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                    $("#editPer").css("display", "none");
           $("#detalle").css("display", "none");
          $("#formularioServicios").css("display", "none");
          
                    $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");$("#listacliente").css("display", "none");
          $("#editDocumentos").css("display", "none");
          $("#listarDocumentos").css("display", "none");
          $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $("#formularioLocalUsuario").css("display", "none");
                $("#listarDS").css("display", "none");
                $(".menu1").css("display", "none");
                $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
          $("#productos_caducos").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#formularioreportesFechasVentas").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
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
          $("#panel").css("display", "block");
           $("#menu1").css("display", "none");
          $("#icomenu-productos").css("display", "none");
          $("#listacliente-editar").css("display", "none");
          $("#productos_caducos").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
           $("#detalle").css("display", "none");
          $("#listacliente").css("display", "none");
          $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
          $("#formularioPersonal").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
          	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
          $("#formularioDocumentos").css("display", "none");
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	    $("#div-stock").css("display", "none");
             $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
            $("#editDocumentos").css("display", "none");
            $("#listarDocumentos").css("display", "none");
            $("#formularioLocalUsuario").css("display", "none");
                  $("#listarDS").css("display", "none");
                  $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                   $("#editDS").css("display", "none"); 
                   $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $(".menu1").css("display", "none");
          $("#formularioreportesFechasVentas").css("display", "none");
              $("#formularioDS").css("display", "none");    
            $("#detalle2").css("display", "block");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		 $("#formularioProductos").css("display", "block"); 
		$("#formularioServicios").css("display", "none");
                $("#detalle73").css("display", "none");
                          $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
		 $("#detalle72").css("display", "none");	  
		 $("#detalle7").css("display", "none");
		$("#detalle3").css("display", "none");
		$("#detalle4").css("display", "none");
		$("#detalle5").css("display", "none");
		$("#detalle6").css("display", "none");
		$("#detalle62").css("display", "none");
                //para el boton  del formulario atras
		$("#formulario-productos-atras").css("display", "block");
                
	  $(".divNuevoProducto").css( { color: " #F90 "    });  }); 
      	/*para mostrar el formnulario de personal*/ 
	    $(".divNuevoPerosonal").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#panel").css("display", "block");
          $("#icomenu-Usuario").css("display", "none");
          $("#listacliente-editar").css("display", "none");
          $("#productos_caducos").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
           $("#detalle").css("display", "none");
          $("#listacliente").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
          $("#formularioDocumentos").css("display", "none");
           $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	    $("#div-stock").css("display", "none");
            $("#editDocumentos").css("display", "none");
            $("#listarDocumentos").css("display", "none");
            $("#listarUsLo").css("display", "none");
            $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
          $("#editUsLo").css("display", "none");
            $("#formularioLocalUsuario").css("display", "none");
                  $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
                   $("#formularioreportesFechasVentas").css("display", "none");
              $("#formularioDS").css("display", "none");  
              $("#listarPer").css("display", "none");
              $(".menu1").css("display", "none");
                    $("#editPer").css("display", "none");
            $("#detalle2").css("display", "none");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		 $("#formularioProductos").css("display", "none");////////////// 
		 $("#formularioPersonal").css("display", "block");////////////// 
		$("#formularioServicios").css("display", "none");
                $("#detalle73").css("display", "none");
                          $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
		 $("#detalle72").css("display", "none");	  
		 $("#detalle7").css("display", "none");
		$("#detalle3").css("display", "none");
		$("#detalle4").css("display", "none");
		$("#detalle5").css("display", "none");
		$("#detalle6").css("display", "none");
		$("#detalle62").css("display", "none");
                //para el boton  del formulario atras
		$("#formulario-productos-atras").css("display", "none");
                
	  $(".divNuevoProducto").css( { color: " #F90 "    });  });  
      // reporte ventas
     $(".reporteVentas").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
                  $("#panel").css("display", "block");
                  $("#icomenu-reportes").css("display", "none");
                  $("#listacliente-editar").css("display", "none");
		            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
           $("#detalle").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
                  $("#div-stock").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                    	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
                  $("#listarUsLo").css("display", "none");
                  $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
          $("#editUsLo").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
		  $("#detalle7").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
                   $(".menu1").css("display", "none");
              $("#formularioDS").css("display", "none");    
                  $("#editDocumentos").css("display", "none");
		  $("#detalle72").css("display", "none");
		    $("#detalle73").css("display", "none");
		    $("#formularioreportesFechasVentas").css("display", "block");
	  });
      // reporte ventas
       //DOCUMENTO gestionar personal        
	   $(".gestionarPersonal").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#icomenu-Usuario").css("display", "none");  
		  $("#detalle4").css("display", "none");  
		  $("#detalle5").css("display", "none"); 
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                    $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                   	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#listarDS").css("display", "none");//$("#listarDS").css("display", "none")
                   $("#listarPer").css("display", "block");//$("#listarDS").css("display", "none")
                    $("#editPer").css("display", "block");
				   $("#listarDocumentos").css("display", "none");
                    $("#detalle").css("display", "none");
                    $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                    $("#formularioLocalUsuario").css("display", "none");
                    $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $("#editServicios").css("display", "none");
                   $("#editDS").css("display", "none");
                  $("#formularioreportesFechasVentas").css("display", "none");
                   $("#formularioDS").css("display", "none");    
                    $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
                   $(".menu1").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
                  //$("#listarDS").css("display", "none");
                  //$("#editDS").css("display", "none"); 
	  });	
          //DOCUMENTO gestionar personal END
              	/*para mostrar el formnulario de tipo  usuario*/ 
	    $(".divNuevoTipoUsuario").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#panel").css("display", "block");
          $("#listacliente-editar").css("display", "none");
          $("#productos_caducos").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#icomenu-tipoUsuario").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
           $("#detalle").css("display", "none");
          $("#listacliente").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
           $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
          $("#formularioDocumentos").css("display", "none");
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	    $("#div-stock").css("display", "none");
            $("#editDocumentos").css("display", "none");
            $("#listarDocumentos").css("display", "none");
                  $("#listarDS").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");
              $("#formularioreportesFechasVentas").css("display", "none");
              $("#listarPer").css("display", "none");
              $(".menu1").css("display", "none");
                    $("#editPer").css("display", "none");
            $("#detalle2").css("display", "none");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		 $("#formularioProductos").css("display", "none");////////////// 
		 $("#formulariotipousuario").css("display", "block");////////////// 
                     $("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
		 $("#formularioPersonal").css("display", "none");////////////// 
		$("#formularioServicios").css("display", "none");
                $("#detalle73").css("display", "none");
                          $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
		 $("#detalle72").css("display", "none");	  
		 $("#detalle7").css("display", "none");
		$("#detalle3").css("display", "none");
		$("#detalle4").css("display", "none");
		$("#detalle5").css("display", "none");
		$("#detalle6").css("display", "none");
		$("#detalle62").css("display", "none");
                //para el boton  del formulario atras
		$("#formulario-productos-atras").css("display", "none");
                
	  $(".divNuevoProducto").css( { color: " #F90 "    });  }); 
      // end mostrar formulario tipo usuario
           	/*para mostrar el formnulario de Local*/ 
	    $(".divNuevoLocal").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#panel").css("display", "block");
          $("#icomenu-local").css("display", "none");
          $("#listacliente-editar").css("display", "none");
          $("#productos_caducos").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
           $("#detalle").css("display", "none");
          $("#listacliente").css("display", "none");
           $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
	 $("#formularioLocalUsuario").css("display", "none");
          $("#formulario-cliente-nuevo").css("display", "none");
          $("#formularioDocumentos").css("display", "none");
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	    $("#div-stock").css("display", "none");
            $("#editDocumentos").css("display", "none");
            $("#listarDocumentos").css("display", "none");
            $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $(".menu1").css("display", "none");
          $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                  $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");  
              $("#listarPer").css("display", "none");
              $("#formularioreportesFechasVentas").css("display", "none");
                    $("#editPer").css("display", "none");
            $("#detalle2").css("display", "none");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ 
		 $("#formularioProductos").css("display", "none");////////////// 
		 $("#formulariotipousuario").css("display", "none");/////////fala oculatar para tomundo/////  $("#formulariotipousuario").css("display", "none");
		 $("#formularioLocal").css("display", "block");/////////fala oculatar para tomundo/////  $("#formulariotipousuario").css("display", "none");
		 $("#formularioPersonal").css("display", "none");////////////// 
		$("#formularioServicios").css("display", "none");
                $("#detalle73").css("display", "none");
                          $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
		 $("#detalle72").css("display", "none");	  
		 $("#detalle7").css("display", "none");
		$("#detalle3").css("display", "none");
		$("#detalle4").css("display", "none");
		$("#detalle5").css("display", "none");
		$("#detalle6").css("display", "none");
		$("#detalle62").css("display", "none"); 
                //para el boton  del formulario atras
		$("#formulario-productos-atras").css("display", "none");
                
	  $(".divNuevoProducto").css( { color: " #F90 "    });  }); 
      	  //gestionar  LOCAL 
	   $(".gestionarLocal").click(function(evento)
      {$("#DivBuscar").css("display", "none");
	   $("#formularioLocal").css("display", "none");
           $("#formularioLocal").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#icomenu-local").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#detalle4").css("display", "none");  
		  $("#detalle5").css("display", "none"); 
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                   $("#listarDS").css("display", "none");//$("#listarDS").css("display", "none")
                   $("#listarPer").css("display", "none");//$("#listarDS").css("display", "none")
                    $("#editPer").css("display", "none");
                    $("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                    $("#editLO").css("display", "block");
                    $("#listarLO").css("display", "block");
                    $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
		 $("#listarDocumentos").css("display", "none");
                 $("#formularioLocalUsuario").css("display", "none");
                    $("#detalle").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $("#editServicios").css("display", "none");
                   $("#editDS").css("display", "none");
                   $(".menu1").css("display", "none");
                   $("#formulariotipousuario").css("display", "none");
                   $("#formularioDS").css("display", "none");   
                   $("#formularioreportesFechasVentas").css("display", "none");
                    $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
                  //$("#listarDS").css("display", "none");
                  //$("#editDS").css("display", "none"); 
	  });	
          //gestionar LOCAL END
          ////registrar USUARIOLOCAL
	   $(".divNuevoLocalUsuario").click(function(evento)
      {$("#DivBuscar").css("display", "none");
	   $("#formularioLocal").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#icomenu-local").css("display", "none");  
		  $("#detalle4").css("display", "none");  
		  $("#detalle5").css("display", "none"); 
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#listarDS").css("display", "none");//$("#listarDS").css("display", "none")
                   $("#listarPer").css("display", "none");//$("#listarDS").css("display", "none")
                    $("#editPer").css("display", "none");
                    $("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                    $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                    $("#editLO").css("display", "none");
                    $("#listarLO").css("display", "none");
		 $("#listarDocumentos").css("display", "none");
					$("#formularioLocalUsuario").css("display", "block");
                    $("#detalle").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $(".menu1").css("display", "none");
                   $("#editServicios").css("display", "none");
                   $("#editDS").css("display", "none");
                   $("#formulariotipousuario").css("display", "none");
                   $("#formularioDS").css("display", "none");    
                    $("#div-stock").css("display", "none");
                    $("#formularioreportesFechasVentas").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
                  //$("#listarDS").css("display", "none");
                  //$("#editDS").css("display", "none"); 
	  });	
          //registrar USUARIOLOCAL END
          //////editar USUARIOLOCAL
	   $(".gestionarLocalUsuario").click(function(evento)
      {$("#DivBuscar").css("display", "none");
	   $("#formularioLocal").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#icomenu-local").css("display", "none");  
		  $("#detalle4").css("display", "none");  
		  $("#detalle5").css("display", "none"); 
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#listarDS").css("display", "none");//$("#listarDS").css("display", "none")
                   $("#listarPer").css("display", "none");//$("#listarDS").css("display", "none")
                    $("#editPer").css("display", "none");
                    $("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                    $("#editLO").css("display", "none");
                    $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                    $("#listarLO").css("display", "none");
		 $("#listarDocumentos").css("display", "none");
					$("#formularioLocalUsuario").css("display", "none");
					$("#listarUsLo").css("display", "block");
					$("#editUsLo").css("display", "block");
                                        $(".menu1").css("display", "none");
                    $("#detalle").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                  $("#formularioreportesFechasVentas").css("display", "none");
                   $("#editServicios").css("display", "none");
                   $("#editDS").css("display", "none");
                   $("#formulariotipousuario").css("display", "none");
                   $("#formularioDS").css("display", "none");    
                    $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
                  //$("#listarDS").css("display", "none");
                  //$("#editDS").css("display", "none"); 
	  });	
          //editar USUARIOLOCAL END
          //          //////editar pago
	   $(".gestionarPagos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
	   $("#formularioLocal").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#detalle4").css("display", "none");  
		  $("#detalle5").css("display", "none"); 
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#icomenu-pagos").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#listarDS").css("display", "none");
                   $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                    $("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                    $("#editLO").css("display", "none");
                    $("#listarLO").css("display", "none");
		 $("#listarDocumentos").css("display", "none");
					$("#formularioLocalUsuario").css("display", "none");
					$("#listarUsLo").css("display", "none");
					 $("#listarPago").css("display", "block");
                                         $(".menu1").css("display", "none");
					$("#listarDetallePago").css("display", "block");
/*$(".menu1").css("display", "none");
					$("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
*/
					$("#editUsLo").css("display", "none");
					
                                        
                    $("#detalle").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                  $("#formularioreportesFechasVentas").css("display", "none");
                   $("#editServicios").css("display", "none");
                   $("#editDS").css("display", "none");
                   $("#formulariotipousuario").css("display", "none");
                   $("#formularioDS").css("display", "none");    
                    $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
                  //$("#listarDS").css("display", "none");
                  //$("#editDS").css("display", "none"); 
	  });	
          //editar pago END
      //gestionar tipo de usuarios       
	   $(".gestionarTipoUsuario").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#icomenu-tipoUsuario").css("display", "none");  
		  $("#detalle4").css("display", "none");  
                  $("#listarPago").css("display", "none");
		  $("#listarDetallePago").css("display", "none");
		  $("#detalle5").css("display", "none"); 
		  $("#detalle62").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
                  $(".menu1").css("display", "none");
		   $("#detalle7").css("display", "none");
                    $("#editLO").css("display", "none");
                   $("#listarLO").css("display", "none");
	           $("#formularioLocal").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#listarDS").css("display", "none");//$("#listarDS").css("display", "none")
                   $("#listarPer").css("display", "none");//$("#listarDS").css("display", "none")
                    $("#editPer").css("display", "none");
                    $("#listarTU").css("display", "block");
                    $("#editTU").css("display", "block");
		    $("#listarDocumentos").css("display", "none");
                    $("#detalle").css("display", "none");
                    $("#listarUsLo").css("display", "none");
                    $("#editUsLo").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $("#editServicios").css("display", "none");
                   $("#editDS").css("display", "none");
                   $("#formulariotipousuario").css("display", "none");
                   $("#formularioDS").css("display", "none");    
                    $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
                   $("#formularioreportesFechasVentas").css("display", "none");
		   $(".gestionartipoProductos").css( { color: " #F90 "    });
                  //$("#listarDS").css("display", "none");
                  //$("#editDS").css("display", "none"); 
	  });	
          //gestionar tipo de usuarios END
      
	  	    $(".divNuevoProveedor").click(function(evento)
      {$("#DivBuscar").css("display", "none"); $("#menu1").css("display", "none");
          $("#panel").css("display", "block");
          $("#icomenu-proveedores").css("display", "none");
          $("#listacliente-editar").css("display", "none");
          $("#listacliente").css("display", "none");
           $("#detalle").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	     $("#detalle2").css("display", "none");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ $("#detalle73").css("display", "none");
		$("#detalle3").css("display", "none");
                $("#productos_caducos").css("display", "none");
                $("#formulario-cliente-nuevo").css("display", "none");
                	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                     $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                $("#formularioDocumentos").css("display", "none");
                $("#detalle4").css("display", "none");
                          $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
          $("#formularioLocalUsuario").css("display", "none");
          $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                $("#editDocumentos").css("display", "none");
                $("#formularioServicios").css("display", "none");
                $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $(".menu1").css("display", "none");
                $("#listarDocumentos").css("display", "none");
		$("#detalle5").css("display", "none");
                $("#div-stock").css("display", "none");
		$("#detalle6").css("display", "block");
		$("#formularioProveedores").css("display", "block");
		 $("#detalle73").css("display", "none");
		 $("#detalle62").css("display", "none");
                       $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
                   $("#formularioreportesFechasVentas").css("display", "none");
              $("#formularioDS").css("display", "none");    
		 $("#detalle72").css("display", "none");
		  //para el boton  del formulario atras
		$("#formulario-proveedores-atras").css("display", "block");
	  $(".divNuevoProducto").css( { color: " #F90 "    });  }); 
      
      //nuevo cliente 
      	  	    $(".divNuevoCliente").click(function(evento)
      {$("#DivBuscar").css("display", "none"); 
          $("#panel").css("display", "none");
          $("#listacliente").css("display", "none");
          
		  $("#detalle2").css("display", "none"); 
                   $("#detalle").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                  $("#listacliente-editar").css("display", "none");
		   $("#detalle73").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
                            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#editDocumentos").css("display", "none");
		  $("#detalle3").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
              $("#formularioreportesFechasVentas").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#DivBuscarProveedor").css("display", "none");
                   $("#DivBuscarClientes").css("display", "none");
                   $("#detalle72").css("display", "none");
		   $("#div-stock").css("display", "none");
                   $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                    $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                    $("#formularioLocalUsuario").css("display", "none");
                    $(".menu1").css("display", "none");
                   $("#formularioPersonal").css("display", "none");
                   $("#listarDocumentos").css("display", "none");
		  $("#formulario-cliente-nuevo").css("display", "block");
                  $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                  	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
                $(".icomenu2-clientes").css("display", "block");
 

				$("#formularioLocal").css("display", "none");
	  $(".divNuevoProducto").css( { color: " #F90 "    });  }); 
      //nuevlo cliente end
	 <!--ocultarSubmenuMenus -->ocultarSubmenuCuenta
 $("#ocultarSubmenuCuenta").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#panel").css("display", "none");
          $("#listacliente").css("display", "none");
                $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
              $("#formularioreportesFechasVentas").css("display", "none");
		  $("#submenuProductoCuenta").css("display", "none"); 
                  $("#formulario-cliente-nuevo").css("display", "none");
                  	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  $("#productos_caducos").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
		  $("#detalle73").css("display", "none");
                            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
                  $("#editDocumentos").css("display", "none");
                   $("#detalle").css("display", "none");
                   $("#formularioLocalUsuario").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $(".menu1").css("display", "none");
          $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
		  $("#formularioServicios").css("display", "none");
                  $("#detalle7").css("display", "none"); 
                    $("#div-stock").css("display", "none");
                    		   $("#menuCuenta").css( { color: "#000", background: "transparent" });
		   	   $(".opcionesMenu2").css( { color: "#000",  background: "#fff" }); 
		    $("#productos").css( { color: "#000",  background: "#fff" });  
 
	  });		  
    $(".gestionarProductos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
           $("#menu1").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none");
                            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
           $("#detalle").css("display", "none");
		  $("#formularioServicios").css("display", "none");
                  $("#detalle73").css("display", "none");
                  $("#productos_caducos").css("display", "none");
                  $("#panel").css("display", "block");
                  $("#icomenu-productos").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
		  $("#detalle7").css("display", "none");  
                  $("#formularioPersonal").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");
              $("#formularioreportesFechasVentas").css("display", "none");
		  $("#detalle4").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                  $("#editDocumentos").css("display", "none");
                  $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
		  		$("#detalle6").css("display", "none");
		$("#detalle62").css("display", "none");
                $(".menu1").css("display", "none");
		  //$("#formularioCategorias").css("display", "block");
		  $("#detalle5").css("display", "block");
                  $("#div-stock").css("display", "none");
		  $("#detalle3").css("display", "block");
			//	  $("#detalle3").css( { height: " 500px	"    });
		  $(".gestionarProductos").css( { color: " #F90 "    });
                  detalle3
 
	  });	  
	  $(".gestionartipoProductos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
           $("#menu1").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
		  $("#detalle2").css("display", "none");  
                  $("#listacliente-editar").css("display", "none");
                  $("#listacliente").css("display", "none");
		  $("#detalle73").css("display", "none");
                   $("#detalle").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                  $("#productos_caducos").css("display", "none");
                  $("#panel").css("display", "block");
                            $("#icomenu-productos").css("display", "none");
                            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
		   $("#detalle72").css("display", "none");	  
                   $("#formularioPersonal").css("display", "none");
                   $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#formularioreportesFechasVentas").css("display", "none");
                         $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
              $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $("#listarDocumentos").css("display", "none");
		  		$("#detalle6").css("display", "none");
                                $("#formularioLocalUsuario").css("display", "none");
		$("#detalle62").css("display", "none");
                $(".menu1").css("display", "none");
                $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                $("#div-stock").css("display", "none");
		  $("#detalle4").css("display", "block"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle3").css("display", "block");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });
          //boton de atras icomenu2-productos
     	  $(".icomenu2-productos-atras").click(function(evento)
      {   $(".icomenu2-productos").css("display", "none");
		 $("#icomenu-proveedores").css("display", "block");
		$("#icomenu-clientes").css("display", "block");
		 $("#icomenu-guias").css("display", "block");
		 $("#icomenu-reportes").css("display", "block");
                 $("#listacliente").css("display", "none");
                   //lo que falta 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
				    $("#icomenu-Usuario").css("display", "block"); 
                                    $("#icomenu-ventas").css("display", "block");
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block"); 
					  $("#icomenu-productos").css("display", "block");
					  $(".notiDetalle2").css("display", "none");
                                          
				  //lo que falta end
     	  });
           //boton de tras icomenu2-productos  end
           ////boton de atras icomenu3-productos
     	  $(".icomenu3-productos-atras").click(function(evento)
           {   $(".icomenu2-productos").css("display", "none");
	      $("#panel").css("display", "block");
	     //para cerrar desde formuloario productos
	      $("#detalle2").css("display", "none");
              $("#listacliente").css("display", "none");
              $(".notiDetalle2").css("display", "none");
                //lo que falta 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block"); 
				  //lo que falta end
     	  });
           //boton de tras icomenu3-productos  end
          //boton de atras icomenu2-proveedores
     	  $(".icomenu2-proveedores-atras").click(function(evento)
      {   $(".icomenu2-proveedores").css("display", "none");
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                                  $("#listacliente").css("display", "none");
                                    //lo que falta 
				  $("#icomenu-documentos").css("display", "block"); 
                                  $("#icomenu-ventas").css("display", "block");
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block"); 
					  $("#icomenu-proveedores").css("display", "block"); 
					  $("#icomenu-proveedores").css("display", "block"); 
					  $(".notiDetalle2").css("display", "none"); 
				  //lo que falta end
     	  });
          
           //boton de tras icomenu2-proveedores end
               //boton de atras icomenu2-reportes
     	  $(".icomenu2-reportes-atras").click(function(evento)
      {   $(".icomenu2-reportes").css("display", "none");
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
                          //cuando hay7 un id y una clase primero es lel id para display none
                          $("#productos_caducos").css("display", "none");
                                  $("#fechaventasreporte").css("display", "none");
$("#icomenu-ventas").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
                            $("#icomenu-proveedores").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                                  $("#listacliente").css("display", "none");
                                  
                                    //lo que falta 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block"); 
				  //lo que falta end
     	  });
          
           //boton de tras icomenu2-reportes end
                    //boton de atras icomenu2-guias
     	  $(".icomenu2-guias-atras").click(function(evento)
      {   $(".icomenu2-guias").css("display", "none");
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
                            $("#icomenu-proveedores").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                                  $("#listacliente").css("display", "none");
                                    //lo que falta 
                                    
$("#icomenu-ventas").css("display", "block");
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block");
                                           $(".notiDetalle2").css("display", "none"); 
				  //lo que falta end
     	  });
          
           //boton de tras icomenu2-guias end
                             //boton de atras icomenu2-clientes
     	  $(".icomenu2-clientes-atras").click(function(evento)
      {   $(".icomenu2-clientes").css("display", "none");
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
                            $("#icomenu-proveedores").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                                  $("#listacliente").css("display", "none");
                                    //lo que falta 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block");
                                   
$("#icomenu-ventas").css("display", "block");
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block"); 
                                            $(".notiDetalle2").css("display", "none");
				  //lo que falta end
     	  });
          
           //boton de tras icomenu2-clientes end 
                        /*para icomenu-documentos, menu1 481*/
	      $("#icomenu-documentos").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-documentos").css("display", "block");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-guias").css("display", "none");
                  $("#listacliente").css("display", "none");
                  $("#icomenu-ventas").css("display", "none");
				  //para lo que falta
				    
				   $("#icomenu-documentos").css("display", "block"); 
				  
				    
				   $("#icomenu-reportes").css("display", "none"); 
				  
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				   $("#icomenu-tipoUsuario").css("display", "none"); 
				   
				     $(".icomenu2-Usuario").css("display", "none");
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "none");
				   $("#icomenu-local").css("display", "none"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
				  
	  });
          /*para icomenu-documentos, menu1 END*/
		  
          //boton de atras icomenu2-documentos
     	  $(".icomenu2-documentos-atras").click(function(evento)
      {    $(".notiDetalle2").css("display", "none"); 
	  $(".icomenu2-documentos").css("display", "none");
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
              $("#icomenu-proveedores").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                  $("#listacliente").css("display", "none");
				  //lo que falta 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-ventas").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block"); 
				  //lo que falta end
     	  });
                       /*para icomenu-servicios, menu1 481*/
	      $("#icomenu-servicios").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-documentos").css("display", "none");
          $("#icomenu-ventas").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-guias").css("display", "none");
                  $("#listacliente").css("display", "none");
				  //para lo que falta
				   
				   $("#icomenu-documentos").css("display", "none"); 
				  
				    
				   $("#icomenu-reportes").css("display", "none"); 
				  
				     $(".icomenu2-servicios").css("display", "block");
				   $("#icomenu-servicios").css("display", "block"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				   $("#icomenu-tipoUsuario").css("display", "none"); 
				   
				     $(".icomenu2-Usuario").css("display", "none");
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "none");
				   $("#icomenu-local").css("display", "none"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
				  
	  });
          /*para icomenu-servicios, menu1 END*/
		  
          //boton de atras icomenu2-servicios
     	  $(".icomenu2-servicios-atras").click(function(evento)
      {    $(".notiDetalle2").css("display", "none"); 
	  $(".icomenu2-servicios").css("display", "none");
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
              $("#icomenu-proveedores").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                  $("#listacliente").css("display", "none");
				  //lo que falta 
                                  $("#icomenu-ventas").css("display", "block"); 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block"); 
				  //lo que falta end
     	  });
          
           //boton de tras icomenu2-servicios end
           //boton de tras icomenu2-documentos end
                        /*para icomenu-tipoUsuario, menu1 481*/
	      $("#icomenu-tipoUsuario").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-documentos").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-guias").css("display", "none");
                  $("#icomenu-ventas").css("display", "none");
                  $("#listacliente").css("display", "none");
				  //para lo que falta
				   
				   $("#icomenu-documentos").css("display", "none"); 
                                 $("#icomenu-reportes").css("display", "none"); 
				  
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "block");
				    
				   
				     $(".icomenu2-Usuario").css("display", "none");
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "none");
				   $("#icomenu-local").css("display", "none"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
				  
	  });
          /*para icomenu-tipoUsuario, menu1 END*/
		  
          //boton de atras icomenu2-tipoUsuario
     	  $(".icomenu2-tipoUsuario-atras").click(function(evento)
      {   
 
	  $("#icomenu2-servicios").css("display", "none");
	  $(".icomenu2-tipoUsuario").css("display", "none");
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
              $("#icomenu-proveedores").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                  $("#listacliente").css("display", "none");
                   $(".notiDetalle2").css("display", "none");
				  //lo que falta 
                                  $("#icomenu-ventas").css("display", "block"); 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block");
                                          
				  //lo que falta end
     	  });
          
           //boton de tras icomenu2-tipoUsuario end
                        /*para icomenu-Usuario, menu1 481*/
	      $("#icomenu-Usuario").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-documentos").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-ventas").css("display", "none"); 
                  $("#icomenu-tipoUsuario").css("display", "none"); 
                  $("#icomenu-guias").css("display", "none");
                  //$("#icomenu-ventas").css("display", "block"); 
                  $("#listacliente").css("display", "none");
				  //para lo que falta
				   
				   $("#icomenu-documentos").css("display", "none"); 
				  
				    
				   $("#icomenu-reportes").css("display", "none"); 
				  
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				     $(".icomenu2-Usuario").css("display", "block");
				    
				   
				    
				   $("#icomenu-Usuario").css("display", "block"); 
				   
				     $(".icomenu2-local").css("display", "none");
				   $("#icomenu-local").css("display", "none"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
				  
	  });
          /*para icomenu-Usuario, menu1 END*/
  
          //boton de atras icomenu2-Usuario
     	  $(".icomenu2-Usuario-atras").click(function(evento)
      {   
 
	  $(".icomenu2-servicios").css("display", "none");
	  $(".icomenu2-Usuario").css("display", "none");
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
              $("#icomenu-proveedores").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                  $("#listacliente").css("display", "none");
                   $(".notiDetalle2").css("display", "none");
				  //lo que falta 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-ventas").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
		  
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block"); 
				  //lo que falta end
     	  });
          
           //boton de tras icomenu2-Usuario end
           	//////////////
                           /*para icomenu-local, menu1 481*/
	      $("#icomenu-local").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-documentos").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-ventas").css("display", "none"); 
                  $("#icomenu-tipoUsuario").css("display", "none"); 
                  $("#icomenu-guias").css("display", "none");
                  //$("#icomenu-ventas").css("display", "block"); 
                  $("#listacliente").css("display", "none");
				  //para lo que falta
				   
				   $("#icomenu-documentos").css("display", "none"); 
				  
				    
				   $("#icomenu-reportes").css("display", "none"); 
				  
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				     $(".icomenu2-Usuario").css("display", "none");
				    
				   
				    
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "block");
				   $("#icomenu-local").css("display", "block"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
				  
	  });
           //boton de atras icomenu2-local
     	  $(".icomenu2-local-atras").click(function(evento)
      {   
 
	  $(".icomenu2-servicios").css("display", "none");
	  $(".icomenu2-local").css("display", "none");
	  $(".icomenu2-Usuario").css("display", "none");
	  $(".notiDetalle2").css("display", "none");
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
              $("#icomenu-proveedores").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                  $("#listacliente").css("display", "none");
                  $(".notiDetalle2").css("display", "none");
				  //lo que falta 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-ventas").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
		  
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  $("#icomenu-pagos").css("display", "block"); 
				  //lo que falta end
     	  });
          
          /*para icomenu-local, menu1 END*/
        ////////////////
        //////////////
                           /*para icomenu-local, menu1 481*/
	      $("#icomenu-pagos").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-documentos").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-ventas").css("display", "none"); 
                  $("#icomenu-tipoUsuario").css("display", "none"); 
                  $("#icomenu-guias").css("display", "none");
                  //$("#icomenu-ventas").css("display", "block"); 
                  $("#listacliente").css("display", "none");
				  //para lo que falta
				   
				   $("#icomenu-documentos").css("display", "none"); 
				  
				    
				   $("#icomenu-reportes").css("display", "none"); 
				  
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				     $(".icomenu2-Usuario").css("display", "none");
				    
				   
				    
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "none");
				     $(".icomenu2-pagos").css("display", "block");
				   $("#icomenu-local").css("display", "none"); 
				   $("#icomenu-pagos").css("display", "block"); 
				    
				     
				  //para lo que falta end
				  
	  });	
          //boton de atras icomenu2-local
     	  $(".icomenu2-pagos-atras").click(function(evento)
      {   
 
	  $(".notiDetalle2").css("display", "none");
	  $(".icomenu2-servicios").css("display", "none");
	  $(".icomenu2-local").css("display", "none");
	  $(".icomenu2-Usuario").css("display", "none");
	  $("#icomenu-pagos").css("display", "block");
	  $(".icomenu2-pagos").css("display", "none");
	  
		    $("#icomenu-productos").css("display", "block");
			  $("#icomenu-clientes").css("display", "block");
			    $("#icomenu-guias").css("display", "block");
              $("#icomenu-proveedores").css("display", "block");
				  $("#icomenu-reportes").css("display", "block");
                  $("#listacliente").css("display", "none");
				  //lo que falta 
				  $("#icomenu-documentos").css("display", "block"); 
				   $("#icomenu-servicios").css("display", "block"); 
				   $("#icomenu-ventas").css("display", "block"); 
				   $("#icomenu-tipoUsuario").css("display", "block"); 
		  
				    $("#icomenu-Usuario").css("display", "block"); 
					  $("#icomenu-local").css("display", "block"); 
					  
				  //lo que falta end
     	  });
          
          /*para icomenu-local, menu1 END*/
        ////////////////////
	    $(".buscarProductos").click(function(evento)
      { $("#menu1").css("display", "none");
		    $("#detalle73").css("display", "none");
                    $("#formulario-cliente-nuevo").css("display", "none");
                    $("#formularioDocumentos").css("display", "none");
                    	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
		  $("#detalle72").css("display", "none");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  $("#panel").css("display", "block");
                  $("#icomenu-productos").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#editDocumentos").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
		  $("#detalle7").css("display", "none");
                  $(".menu1").css("display", "none");
                  $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
              $("#formularioreportesFechasVentas").css("display", "none");
                  $("#DivBuscarProveedor").css("display", "none");
                  $("#DivBuscarClientes").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                   $("#detalle").css("display", "none");
                  $("#productos_caducos").css("display", "none");
                  $("#listacliente-editar").css("display", "none");
                  $("#listacliente").css("display", "none");
		$("#DivBuscar").css("display", "block");
                $("#div-stock").css("display", "none");
                          $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
          $("#detalle2").css("display", "none"); 
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "block");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
		  
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });  
	    $(".buscarProveedores").click(function(evento)
      { $("#menu1").css("display", "none");
		    $("#detalle73").css("display", "none");
                    $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle72").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                  $("#panel").css("display", "none");
                  	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#listarPer").css("display", "none");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                    $("#editPer").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
                  $("#listarDocumentos").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $("#formularioreportesFechasVentas").css("display", "none");
          $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
		  $("#detalle7").css("display", "none");
                  $(".menu1").css("display", "none");
                  $("#productos_caducos").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                   $("#detalle").css("display", "none");
                  $("#listacliente-editar").css("display", "none");
                  $("#listacliente").css("display", "none");
		$("#DivBuscar").css("display", "none");
                          $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
                $("#editDocumentos").css("display", "none");
		$("#DivBuscarProveedor").css("display", "block");
                $("#DivBuscarClientes").css("display", "none");
                $("#div-stock").css("display", "none");
          $("#detalle2").css("display", "none"); 
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
		  
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });  
	    $(".buscarCliente").click(function(evento)
      {
		  $("#detalle73").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle72").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                  $("#panel").css("display", "block");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
          $("#icomenu-clientes").css("display", "none");
		  $("#detalle7").css("display", "none");
                  $("#editDocumentos").css("display", "none");
                   $("#detalle").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                  $("#productos_caducos").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none");
                   $("#formularioreportesFechasVentas").css("display", "none");
              $("#formularioDS").css("display", "none");  
              $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
                  $("#listacliente").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
		  $("#DivBuscar").css("display", "none");
                  $(".menu1").css("display", "none");
                  $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
		  $("#DivBuscarProveedor").css("display", "none");
                  $("#listacliente-editar").css("display", "block");
		  $("#DivBuscarClientes").css("display", "block");
                  $("#div-stock").css("display", "none");
                  $("#detalle2").css("display", "none"); 
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
		  
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });  
	  $(".gestionarProvedores").click(function(evento)
      {$("#DivBuscar").css("display", "none");
           $("#menu1").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		  $("#detalle73").css("display", "none");
                   $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
                  $("#listacliente-editar").css("display", "none");
                   $("#detalle").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle7").css("display", "none");
                  $("#formularioreportesFechasVentas").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
             $("#formulariotipousuario").css("display", "none");
		$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                     $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
		$("#formularioLocal").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                  $("#detalle6").css("display", "none");
                 $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
                  $("#editDocumentos").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
                  $("#listacliente").css("display", "none");
                  $("#listarPago").css("display", "none");
		$("#listarDetallePago").css("display", "none");
		  $("#detalle72").css("display", "none");
                  $("#productos_caducos").css("display", "none");
                  $("#panel").css("display", "block");
                  $(".menu1").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "block");
		   $("#detalle72").css("display", "none");	
                   $("#div-stock").css("display", "none");
		    $("#detalle7").css("display", "none");
		  $("#detalle3").css("display", "block");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });		  
	  $(".gestionarClientes").click(function(evento)
      {           $("#DivBuscar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
		  $("#detalle2").css("display", "none"); 
		  $("#detalle73").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle7").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                    	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                  $("#detalle6").css("display", "none");
                  $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
		  $("#detalle72").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $(".menu1").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
              $("#formularioreportesFechasVentas").css("display", "none");
                  $("#productos_caducos").css("display", "none");
                  $("#panel").css("display", "block");
                  $("#editDocumentos").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
                   $("#detalle").css("display", "none");
		  $("#formularioServicios").css("display", "none");
                  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#listacliente").css("display", "block");
		  $("#listacliente-editar").css("display", "block");
		  $("#icomenu-clientes").css("display", "none");
                  $("#detalle72").css("display", "none");
                            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
                  $("#div-stock").css("display", "none");
		  $("#detalle7").css("display", "none");
		  $("#detalle3").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
                 
 
	  });		  
	   $(".divNuevaGuia").click(function(evento)
      {$("#DivBuscar").css("display", "none");
           $("#menu1").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
                    $("#icomenu-guias").css("display", "none");
                    $("#detalle").css("display", "none");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");
              $("#formularioreportesFechasVentas").css("display", "none");
              	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                     $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                  $("#editDocumentos").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
                  $("#listarPago").css("display", "none");
                  $(".menu1").css("display", "none");
					$("#listarDetallePago").css("display", "none");
		  $("#detalle3").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
		   $("#detalle7").css("display", "block");
                   $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });		  
	  
	     $(".gestionarGuias").click(function(evento)
      {$("#DivBuscar").css("display", "none");
           $("#menu1").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#icomenu-guias").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
                  $("#panel").css("display", "block");
                  $("#listacliente-editar").css("display", "none");
		            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
           $("#detalle").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
		  $("#detalle3").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
                  $("#div-stock").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                    	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                   $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
                  $("#listarUsLo").css("display", "none");
                  $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
          $("#editUsLo").css("display", "none");
                  $("#formularioLocalUsuario").css("display", "none");
		  $("#detalle7").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none");
                   $(".menu1").css("display", "none");
                   $("#formularioreportesFechasVentas").css("display", "none");
              $("#formularioDS").css("display", "none");    
                  $("#editDocumentos").css("display", "none");
		  $("#detalle72").css("display", "block");
		    $("#detalle73").css("display", "block");
	  });
          //DOCUMENTOS
          	   $(".divNuevoDocumento").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $(".menu1").css("display", "none");
          
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#formularioServicios").css("display", "none");
                   $("#detalle").css("display", "none");
                  $("#detalle62").css("display", "none");
                 $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
          $("#icomenu-documentos").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
		   $("#detalle7").css("display", "none");
                    $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
              	$("#formulariotipousuario").css("display", "none");
		$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                    $("#formularioreportesFechasVentas").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                    $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
		$("#formularioLocal").css("display", "none");
                   $("#formularioDocumentos").css("display", "block");
                   $("#listarDocumentos").css("display", "none");
                   $("#listarUsLo").css("display", "none");
                   $("#listarPago").css("display", "none");
		$("#listarDetallePago").css("display", "none");
          $("#editUsLo").css("display", "none");
                   $("#formularioLocalUsuario").css("display", "none");
                   $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
                   $(".menu1").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });	
          	   $("#mostrarcamposguia").click(function(evento)
      {$("#camposguia").css("display", "block");
	  });	
          	   $("#ocultarcamposguia").click(function(evento)
      {$("#camposguia").css("display", "none");
	  });	
          	   $(".gestionarDocumentos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
           $(".menu1").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
		   $("#icomenu-documentos").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
                   $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
              $("#formularioDS").css("display", "none"); 
              $("#formularioreportesFechasVentas").css("display", "none");
              $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
             $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
		   $("#detalle7").css("display", "none");
              $("#formulariotipousuario").css("display", "none");
		$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                     $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
		$("#formularioLocal").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                   $("#listarDocumentos").css("display", "block");
                   $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $("#listarPago").css("display", "none");
		$("#listarDetallePago").css("display", "none");
                   $("#formularioLocalUsuario").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                    $("#detalle").css("display", "none");
                    $(".menu1").css("display", "none");
                   $("#editDocumentos").css("display", "block");
                    $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });	
          //DOCUMENTOS END
          //SERVICIO
          	   $(".divNuevoServicio").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
           $("#menu1").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#icomenu-servicios").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                     $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                    $("#detalle").css("display", "none");
                   $("#formularioServicios").css("display", "block");
                   $("#editServicios").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#listarDocumentos").css("display", "none");
                         $("#listarDS").css("display", "none");
                         $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                   $("#editDS").css("display", "none"); 
                   $("#listarPago").css("display", "none");
                   $("#formularioreportesFechasVentas").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                   $("#formularioLocalUsuario").css("display", "none");
              $("#formularioDS").css("display", "none");    
                   $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
                   $(".menu1").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });	
          $(".gestionarServicios").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
		   $("#icomenu-servicios").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                   	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                    $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                   $("#listarServicios").css("display", "block");
                   $("#listarDocumentos").css("display", "none");
                   $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                   $("#formularioLocalUsuario").css("display", "none");
                    $("#detalle").css("display", "none");
                    $(".menu1").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                   $("#editServicios").css("display", "block");
                         $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
                   $("#formularioreportesFechasVentas").css("display", "none");
                    $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });	
          //SERVICIO END
          // //DOCUMENTO  SERVICIO
          	   $(".divNuevoDS").click(function(evento)
      {$("#DivBuscar").css("display", "none");
           $("#menu1").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
                   
		  $("#icomenu-servicios").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#formularioreportesFechasVentas").css("display", "none");
                   	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                    $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                    $("#detalle").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#formularioDS").css("display", "block");// $("#formularioDS").css("display", "none");
                   $("#editServicios").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#listarDocumentos").css("display", "none");
                   $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                   $("#formularioLocalUsuario").css("display", "none");
                   $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
	       $("#listarDS").css("display", "none");
               $(".menu1").css("display", "none");
                   $("#editDS").css("display", "none"); 
                   $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
              $("#formularioDS").css("display", "block");    
                   $("#div-stock").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });	
          $(".gestionarDS").click(function(evento)
      {$("#DivBuscar").css("display", "none");
           $("#menu1").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#listacliente-editar").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#detalle4").css("display", "none");  
		  $("#detalle5").css("display", "none"); 
		  $("#detalle62").css("display", "none");
                  $("#productos_caducos").css("display", "none");
		  $("#detalle6").css("display", "none");
                  $("#listarPer").css("display", "none");
                    $("#icomenu-servicios").css("display", "none");
                    $("#editPer").css("display", "none");
                  $("#formularioPersonal").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		  $("#detalle3").css("display", "none");
		   $("#detalle7").css("display", "none");
                    $("#formulariotipousuario").css("display", "none");
		  $("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                   $("#formularioDocumentos").css("display", "none");
                    $("#editLO").css("display", "none");
                  $("#listarLO").css("display", "none");
		 $("#formularioLocal").css("display", "none");
                   $("#listarServicios").css("display", "none");
                   $("#formularioLocalUsuario").css("display", "none");
                   $("#listarDS").css("display", "block");//$("#listarDS").css("display", "none")
                   $("#listarDocumentos").css("display", "none");
                   $("#listarPago").css("display", "none");
                   $(".menu1").css("display", "none");
		 $("#listarDetallePago").css("display", "none");
                   $("#listarUsLo").css("display", "none");
                  $("#editUsLo").css("display", "none");
                    $("#detalle").css("display", "none");
                   $("#formularioServicios").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $("#editServicios").css("display", "none");
                   $("#editDS").css("display", "block");
                   $("#formularioDS").css("display", "none");    
                    $("#div-stock").css("display", "none");
                    $("#formularioreportesFechasVentas").css("display", "none");
		   $("#detalle72").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
                  //$("#listarDS").css("display", "none");
                  //$("#editDS").css("display", "none"); 
	  });	
          //DOCUMENTO SERVICIO END
 
          //stockk productos
          	   $(".stock-productos").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
		  $("#detalle2").css("display", "none"); 
                  $("#listacliente").css("display", "none");
		   $("#detalle73").css("display", "none");
                   $("#editDocumentos").css("display", "none");
                   $("#productos_caducos").css("display", "none");
                   $("#listacliente-editar").css("display", "none");
                   $("#panel").css("display", "block");
		  $("#icomenu-reportes").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle4").css("display", "none"); //para detalle de editar tipo de producto
		  $("#detalle5").css("display", "none");//para detalle de editar producto
		  $("#detalle62").css("display", "none");
		  $("#detalle6").css("display", "none");
                            $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
		  $("#detalle3").css("display", "none");
                        $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
                    $("#detalle").css("display", "none");
                    $("#formularioLocalUsuario").css("display", "none");
              $("#formularioDS").css("display", "none");
              $(".menu1").css("display", "none");
              $("#formularioreportesFechasVentas").css("display", "none");
                  $("#formularioServicios").css("display", "none");
                  $("#listarDocumentos").css("display", "none");
                  $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                  $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
                  	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                     $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
                  $("#formularioDocumentos").css("display", "none");
                  $("#formulario-cliente-nuevo").css("display", "none");
		   $("#detalle7").css("display", "none");
                   $("#listarPer").css("display", "none");
                    $("#editPer").css("display", "none");
                   $("#formularioPersonal").css("display", "none");
                   $("#detalle72").css("display", "none");
		   $("#div-stock").css("display", "none");
		  $(".gestionartipoProductos").css( { color: " #F90 "    });
 
	  });
          //stock producxtos END
          /*para icomenu-productos, menu1*/
    $("#icomenu-productos").click(function(evento)
      {$("#icomenu-proveedores").css("display", "none");
          $(".icomenu2-productos").css("display", "block");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
		  $("#icomenu-clientes").css("display", "none"); 
                  $("#icomenu-guias").css("display", "none");
                  $("#icomenu-ventas").css("display", "none");
                  $("#icomenu-reportes").css("display", "none");
                  $("#listacliente").css("display", "none");
                  		  //para lo que falta
				   $(".icomenu2-documentos").css("display", "none");
				   $("#icomenu-documentos").css("display", "none"); 
				   
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				   $("#icomenu-tipoUsuario").css("display", "none"); 
				   
				     $(".icomenu2-Usuario").css("display", "none");
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "none");
				   $("#icomenu-local").css("display", "none"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
	  });
	  /*para icomenu-proveedores, menu1*/
	      $("#icomenu-proveedores").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-proveedores").css("display", "block");
		  $("#icomenu-clientes").css("display", "none"); 
                  $("#icomenu-guias").css("display", "none");
                  $("#icomenu-reportes").css("display", "none");
                  $("#listacliente").css("display", "none");
                  $("#icomenu-ventas").css("display", "none");
                  		  //para lo que falta
				   $(".icomenu2-documentos").css("display", "none");
				   $("#icomenu-documentos").css("display", "none"); 
				   
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				   $("#icomenu-tipoUsuario").css("display", "none"); 
				   
				     $(".icomenu2-Usuario").css("display", "none");
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "none");
				   $("#icomenu-local").css("display", "none"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
	  });
	  	  /*para icomenu-clientes, menu1*/
	      $("#icomenu-clientes").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-clientes").css("display", "block");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
          $("#icomenu-ventas").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-guias").css("display", "none");
                  $("#icomenu-reportes").css("display", "none");
                  $("#listacliente").css("display", "none");
                  		  //para lo que falta
				   $(".icomenu2-documentos").css("display", "none");
				   $("#icomenu-documentos").css("display", "none"); 
				   
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				   $("#icomenu-tipoUsuario").css("display", "none"); 
				   
				     $(".icomenu2-Usuario").css("display", "none");
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "none");
				   $("#icomenu-local").css("display", "none"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
	  });
	  	  	  /*para icomenu-guias, menu1*/
	      $("#icomenu-guias").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");
          $(".icomenu2-reportes").css("display", "none");
          $(".icomenu2-proveedores").css("display", "none");
          $(".icomenu2-guias").css("display", "block");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-reportes").css("display", "none");
                  $("#listacliente").css("display", "none");
                  
$("#icomenu-ventas").css("display", "none");
                  		  //para lo que falta
				   $(".icomenu2-documentos").css("display", "none");
				   $("#icomenu-documentos").css("display", "none"); 
				   
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				   $("#icomenu-tipoUsuario").css("display", "none"); 
				   
				     $(".icomenu2-Usuario").css("display", "none");
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "none");
				   $("#icomenu-local").css("display", "none"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
	  });	  	
              /*para icomenu-reportes, menu1 481*/
	      $("#icomenu-reportes").click(function(evento)
      {$("#icomenu-productos").css("display", "none");
          $(".icomenu2-productos").css("display", "none");//icomenu2-productos es para la calse de los botones
          $(".icomenu2-proveedores").css("display", "none");
          $(".icomenu2-reportes").css("display", "block");
          
$("#icomenu-ventas").css("display", "none");
		  $("#icomenu-proveedores").css("display", "none"); 
                  $("#icomenu-clientes").css("display", "none");
                  $("#icomenu-guias").css("display", "none");
                  $("#listacliente").css("display", "none");
                  		  //para lo que falta
				   $(".icomenu2-documentos").css("display", "none");
				   $("#icomenu-documentos").css("display", "none"); 
				   
				     $(".icomenu2-servicios").css("display", "none");
				   $("#icomenu-servicios").css("display", "none"); 
				   
				     $(".icomenu2-tipoUsuario").css("display", "none");
				   $("#icomenu-tipoUsuario").css("display", "none"); 
				   
				     $(".icomenu2-Usuario").css("display", "none");
				   $("#icomenu-Usuario").css("display", "none"); 
				   
				     $(".icomenu2-local").css("display", "none");
				   $("#icomenu-local").css("display", "none"); 
				   
				     $(".icomenu2-pagos").css("display", "none");
				   $("#icomenu-pagos").css("display", "none"); 
				  //para lo que falta end
	  });
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
 $(".campofechaf").datepicker({
      showOn: 'both',
      buttonImage: 'imagenes/panel/calendar.png',
      buttonImageOnly: true,
      changeYear: true,
      numberOfMonths: 2
   });
 $("#campofecha3").datepicker({
      showOn: 'both',
      buttonImage: 'imagenes/panel/calendar.png',
      buttonImageOnly: true,
      changeYear: true,
      numberOfMonths: 2
   });
   
   //para productos caducos
     	    $(".fechacaducidad").click(function(evento)
      {$("#DivBuscar").css("display", "none");
          $("#DivBuscarProveedor").css("display", "none");
          $("#DivBuscarClientes").css("display", "none");
          $("#panel").css("display", "block");
		  $("#icomenu-reportes").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  $("#icomenu-guias").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
		  $("#detalle").css("display", "none");  /*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/
	     $("#detalle2").css("display", "none");/*siempre hacer esto para ocultar el detalle  y mostrar detalle2*/ $("#detalle73").css("display", "none");
		$("#detalle3").css("display", "none");
                $("#listacliente-editar").css("display", "none");
                $("#formulario-cliente-nuevo").css("display", "none");
                $("#formularioDocumentos").css("display", "none");
                $("#formularioPersonal").css("display", "none");
                 $("#editLO").css("display", "none");
                $("#listarLO").css("display", "none");
				$("#formularioLocal").css("display", "none");
		$("#detalle4").css("display", "none");
                	$("#formulariotipousuario").css("display", "none");
					$("#listarTU").css("display", "none");
                    $("#editTU").css("display", "none");
                 $("#detalle").css("display", "none");
                $("#editDocumentos").css("display", "none");
                $("#formularioServicios").css("display", "none");
                $("#listarPago").css("display", "none");
					$("#listarDetallePago").css("display", "none");
                $("#formularioLocalUsuario").css("display", "none");
                $("#listarDocumentos").css("display", "none");
                $("#listarUsLo").css("display", "none");
          $("#editUsLo").css("display", "none");
          $(".menu1").css("display", "none");
		$("#detalle5").css("display", "none");
                $("#listarPer").css("display", "none");
                $("#formularioreportesFechasVentas").css("display", "none");
                    $("#editPer").css("display", "none");
                      $("#listarDS").css("display", "none");
                   $("#editDS").css("display", "none"); 
              $("#formularioDS").css("display", "none");    
                $("#div-stock").css("display", "none");
		$("#detalle6").css("display", "none");
                          $("#editServicios").css("display", "none");
          $("#listarServicios").css("display", "none");
		$("#formularioProveedores").css("display", "none");
		 $("#detalle73").css("display", "none");
		 $("#detalle62").css("display", "none");
		 $("#detalle72").css("display", "none");
		 $("#productos_caducos").css("display", "block");
		    }); 
   //para productos caducos end
   //para exportar al exel	
 
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});
	$("#menu").click(function(event) {
		$(".icomenu2-documentos").css("display", "none"); 
	$(".icomenu2-servicios").css("display", "none"); 
	$(".icomenu2-tipoUsuario").css("display", "none"); 
	$(".icomenu2-Usuario").css("display", "none"); 
	$(".icomenu2-productos").css("display", "none"); 
	$(".icomenu2-proveedores").css("display", "none"); 
	$(".icomenu2-reportes").css("display", "none"); 
	$(".icomenu2-guias").css("display", "none"); 
	$(".icomenu2-clientes").css("display", "none"); 
	$(".icomenu2-local").css("display", "none"); 
	$(".icomenu2-pagos").css("display", "none");  
});



 $('.full-width').horizontalNav({});
 
  
   //jquery onready end
   
	 
  })

 







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
<link href="../css/jquery-ui-1.8.21.custom.css" rel="stylesheet" type="text/css"></link>
<link href="../incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
<link href="../css/adminPanel2.css" rel="stylesheet" type="text/css" />
<style type="text/css">

</style> 
</head>

<body class="incawasi">
<div id="header"><!-- #header-->
 
<div id="logo">
  <a href="panel.php"><img src="imagenes/logo.jpg" width="208" height="73" /></a></div> 
    <div   style="position:absolute; width: 100px; left: 704px; top: 22px;">
  </div>

</div><!-- end #header -->
 <div id="horizonte"><!-- #header-->
 
 <div id="menuhoriz">
<ul>
        <li><a href='destruir.php'>Salir</a></li>
        <li><a id="divGestionarCuenta" href='#' onClick="consultaCuenta('1')">My Cuenta</a></li>
        
  
       
</ul>
</div>
 <? include ('ya.php'); ?>
</div><!-- end #header -->
<!---->
 
  
  <div id="mainContent">
    <div id="contenedor_carrito">
    <div class="noti">
            <!--     para cuenta-->
                    <!--     <div class="opcionesMenu" id="menuCuenta">cuenta</div>para cuenta-->
                 <div id="submenuProductoCuenta">
                 	<div class="opcionesMenu2" id="divMisDatos"> <a onClick="consultaCuenta('1')" >Mis Datos</a></div><!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
                 	<div class="opcionesMenu2" ><a onClick="pedirDatosCuenta('1')" >Gestionar Cuenta</a></div><!--=0jo  modificar aki si se cambiala BD valor 1 tabla Tipo deusuario-->
                    <div class="opcionesMenu2menu" id="ocultarSubmenuCuenta">Ocultar</div>
                 </div>
     <!--     para cuenta-->
                               <div id="submenuProducto">
                    <div class="opcionesMenu2" id="verCompras" onClick="compras()">compras:</div>
                    <div class="opcionesMenu2" id="ocultarSubmenuProductos">Ocultar</div>
      </div>    
                 
      <ul id="menu">
 <li><a href="#">Documento</a>
	<ul>
		<li class="divNuevoDocumento"><a href="#">Nuevo Documento</a></li>
		<li class="gestionarDocumentos" onClick="gestionarDocumento()"><a href="#">Listar Documentos</a></li>
	</ul>
</li>
          <li><a href="#">Servicios</a>
	<ul>
		<li class="divNuevoServicio"><a href="#">Nuevo Servicio</a></li>
		<li class="gestionarServicios" onClick="gestionarServ()"><a href="#">Listar Servicios</a></li>
	</ul></li>
          <li><a href="#">Documento Servicio</a>
	<ul>
		<li class="divNuevoDS"><a href="#">Nuevo Documento servicio</a></li>
		<li class="gestionarDS" onClick="gestionarDS()"><a href="#">Listar Documentos Servicios</a></li>
	</ul></li>
          <li><a href="#">Proveedores</a>
	<ul>
		<li class="divNuevoProveedor"><a href="#">Nuevo Proveedor</a></li>
		<li class="gestionarProvedores" onClick="gestionarPro()"><a href="#">Listar Proveedores</a></li>
                <li class="buscarProveedores" ><a href="#">Buscar Proveedor</a></li>
	</ul>
</li>
          <li><a href="#">Guias</a>
	<ul>
		<li class="divNuevaGuia"><a href="#">Nueva Guia</a></li>
		<li class="gestionarGuias" onClick="gestionarGui()"><a href="#">Listar Guias</a></li>
	</ul>
</li>
  <?
  $stockpro=dime("select p.idproductos,p.Cantidad_producto from productos p
where p.Cantidad_producto < 5  ")or die(ovni("stockProductos"));
  $numerostock=  "<spam class='notifica'> ".mysql_num_rows($stockpro)." </spam>";
  ?>
<li><a href="#">Productos <?=$numerostock; ?></a>
	<ul>
		<li class="divNuevoProducto"><a href="#">Nuevo Producto</a></li>
		<li class="gestionarProductos" onClick="gestionarP()"><a href="#">Listar Productos</a></li>
        <li class="gestionartipoProductos" onClick="gestionartipoP()"><a href="#">Listar Categorias </a></li>
		<li class="buscarProductos" ><a href="#">Buscar Productos</a></li>
	</ul>
</li>

 <li><a href="#">Clientes</a>
	<ul>
		<li class="divNuevoCliente"><a href="#">Nuevo Cliente</a></li>
		<li class="gestionarClientes" onClick="gestionarCliente()"><a href="#">Listar Clientes</a></li>
                <li class="buscarCliente" ><a href="#">Buscar Cliente</a></li>
	</ul>
</li>         




<li><a href="#">Reportes</a>
	<ul>
            <li class="stock-productos"><a href="reporteproductos.php" target="_blank">Reporte Productos</a></li>
            <li class="reporteVentas"><a href="#">Reporte Ventas</a></li>
            <li class="fechacaducidad"><a href="#">Por fecha de Caducidad</a></li>
		 
	</ul></li>
<li><a href="#">Cargos</a>
	<ul>
            <li class="divNuevoTipoUsuario"><a href="#" >Registrar Cargo</a></li>
            <li class="gestionarTipoUsuario" onClick="gestionarTipoUsuario()"><a href="#" >Listar Cargos</a></li>
	</ul></li>
          <li><a href="#">Personal</a>
	<ul>
            <li class="divNuevoPerosonal"><a href="#" >Registrar Personal</a></li>
            <li class="gestionarPersonal" onClick="gestionarPersonal()"><a href="#" >Listar Personal</a></li>
             
		 
	</ul></li>
                  <li><a href="#">Local</a>
	<ul>
            <li class="divNuevoLocal"><a href="#" >Registrar Local</a></li>
            <li class="gestionarLocal" onClick="gestionarLocal()"><a href="#" >Listar Local</a></li>
            
</ul></li>
                       <li><a href="#">Usuario Local</a>
	<ul> <li class="divNuevoLocalUsuario"><a href="#" >Asignar Local a Usuario</a></li>
	 <li class="gestionarLocalUsuario" onClick="gestionarLocalUsuario()"><a href="#" >Listar Local Personal</a></li>
	</ul></li>
                       <li><a href="#">Pagos</a>
	<ul> <li class="gestionarPagos" onClick="gestionarPagos()"><a href="#" >listar de Pagos</a></li>
	      
	</ul></li>
</ul>      
          
    </div>
        <div id="panel" class="panel" >
                        <span class="menu1" id="icomenu-documentos"><a   href="#">
                    <img src="imagenes/panel/documentos.png" width="175" height="150"  alt="documentos" style="background-color: #6594D1;"/></a></span>
  <div class="icomenu2-documentos">
                <a  class="button mediano azul" href="#"><span class="divNuevoDocumento" >Nuevo Documento</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarDocumentos" onClick="gestionarDocumento()">Listar Documentos</span></a>
                <a  class="button mediano naranja" href="#"><span class="icomenu2-documentos-atras">Atras</span></a>
            </div> <!-- SERVICIOS-->
<span class="menu1" id="icomenu-servicios"><a   href="#">
        <img src="imagenes/panel/servicios.png" width="175" height="150" alt="servicios" style="background-color: #6594D1;" />	</a>
 </span>
<div class="icomenu2-servicios">
                <a  class="button mediano azul" href="#"><span class="divNuevoServicio" >Nuevo Servicio</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarServicios" onClick="gestionarServ()">Listar Servicios</span></a>
                <a  class="button mediano azul" href="#">
                    <span class="divNuevoDS">Registrar Documento Servicio</span>
                </a>
                 <a  class="button mediano azul" href="#">
                    <span class="gestionarDS" onClick="gestionarDS()">Listar Documentos Servicios</span>
                </a>
                <a  class="button mediano naranja" href="#"><span class="icomenu2-servicios-atras">Atras</span></a>
            </div>			<!-- SERVICIOS end-->
                        <span class="menu1" id="icomenu-proveedores"><img src="imagenes/panel/proveedores.png" width="175" height="150" /></span>
                        <span class="menu1" id="icomenu-guias"><img src="imagenes/panel/guias.png" width="175" height="150" /></span>
            <span class="menu1" id="icomenu-productos"><img src="imagenes/panel/productos2.png" width="175" height="150"/></span>
            <span class="menu1" id="icomenu-reportes"><a   href="#"><img src="imagenes/panel/reportes.png" width="175" height="150" /></a> </span>
            <span class="menu1" id="icomenu-clientes"><img src="imagenes/panel/clientes.png" width="175" height="150" /></span>
            			<!-- Tipo  tipoUsuario-->
<span class="menu1" id="icomenu-tipoUsuario"><a   href="#">
        <img src="imagenes/panel/tipoUsuario.png" width="175" height="150" alt="Cargos" style="background-color: #6594D1;" />
	</a>
 </span>
 
  <div class="icomenu2-tipoUsuario">
                <a  class="button mediano azul" href="#"><span class="divNuevoTipoUsuario" >Nuevo Cargo</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarTipoUsuario" onClick="gestionarTipoUsuario()">Listar Cargos</span></a>
                <a  class="button mediano naranja" href="#"><span class="icomenu2-tipoUsuario-atras">Atras</span></a>
            </div>
			<!-- tipo tipoUsuario end-->
            			<!--   Usuarios-->
<span class="menu1" id="icomenu-Usuario"><a   href="#">
        <img src="imagenes/panel/Usuario.png" width="175" height="150" alt="Personal" style="background-color: #6594D1;" />
	</a>
 </span>
 
  <div class="icomenu2-Usuario">
                <a  class="button mediano azul" href="#"><span class="divNuevoPerosonal" >Nuevo Personal</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarPersonal" onClick="gestionarPersonal()">Listar  Personal</span></a>
                <a  class="button mediano naranja" href="#"><span class="icomenu2-Usuario-atras">Atras</span></a>
            </div>
			<!--  Usuarios end-->
            <span class="menu1" id="icomenu-ventas"><a   href="vender.php"><img src="#" width="175" height="150" alt="Ventas" style="background-color: #6594D1;" /></a> </span>
            <div class="icomenu2-productos">
                <a  class="button mediano azul" href="#"><span class="divNuevoProducto" >Nuevo  Producto</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarProductos" onClick="gestionarP()">Listar Productos</span></a>
                <a  class="button mediano azul" href="#"><span class="buscarProductos" >Buscar Producto</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionartipoProductos" onClick="gestionartipoP()">Gestionar Categoria</span></a>
                <a  class="button mediano naranja" href="#"><span class="icomenu2-productos-atras">Atras</span></a>
            </div>
               <div class="icomenu2-proveedores">
                <a  class="button mediano azul" href="#"><span class="divNuevoProveedor" >Proveedor Nuevo</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarProvedores" onClick="gestionarPro()">Listar Proveedores</span></a>
                <a  class="button mediano naranja" href="#"><span class="icomenu2-proveedores-atras">Atras</span></a>
            </div>
              <div class="icomenu2-reportes">
                <a  class="button mediano azul" href="#"><span class="fechacaducidad" >Por fecha de Caducidad</span></a>
                
                <a  class="button mediano azul" href="reporteproductos.php" target="_blank"><span class="stock-productos" onClick="GestionarPro()">Reporte Productos</span></a>
                <a  class="button mediano azul" href="#"><span class="reporteVentas" >Reporte Ventas</span></a> 
                <a  class="button mediano naranja" href="#"><span class="icomenu2-reportes-atras">Atras</span></a>
            </div>
             <div class="icomenu2-guias">
                <a  class="button mediano azul" href="#"><span class="divNuevaGuia" >Nueva Guia</span></a>
                <a  class="button mediano azul" href="#">
                    <span class="gestionarGuias" onClick="gestionarGui()">Listar Guias</span>
                </a>
                 <a  class="button mediano naranja" href="#"><span class="icomenu2-guias-atras">Atras</span></a>
            </div>
               <div class="icomenu2-clientes">
                    <a  class="button mediano azul" href="#"><span class="divNuevoCliente" >Nuevo Cliente</span></a>
                   <a class="button mediano azul" href="#"><span class="gestionarClientes" onClick="gestionarCliente()">Listar Clientes</span></a>

                <a  class="button mediano azul" href="#"><span class="buscarCliente" >Buscar Cliente</span></a>
                 <a  class="button mediano naranja" href="#"><span class="icomenu2-clientes-atras">Atras</span></a>
            </div>

			

			

			
			

			
			<!--   local-->
<span class="menu1" id="icomenu-local"><a   href="#">
        <img src="imagenes/panel/local.png" width="175" height="150" alt="local" style="background-color: #6594D1;" />
	</a>
 </span>
 
  <div class="icomenu2-local">
                <a  class="button mediano azul" href="#"><span class="divNuevoLocal" >Nuevo Local</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarLocal" onClick="gestionarLocal()">Listar  Locales</span></a>
                <a  class="button mediano azul" href="#"><span class="divNuevoLocalUsuario" >Asignar Local a Personal</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarLocalUsuario"onClick="gestionarLocalUsuario()" >Listar Usuario Personal</span></a>
                <a  class="button mediano naranja" href="#"><span class="icomenu2-local-atras">Atras</span></a>
            </div>
			<!--  local end-->
			
			
						<!--   local-->
<span class="menu1" id="icomenu-pagos"><a   href="#">
        <img src="imagenes/panel/pagos.png" width="175" height="150" alt="pagos" style="background-color: #6594D1;" />
	</a>
 </span>
 
  <div class="icomenu2-pagos">
                <a  class="button mediano azul" href="vender.php"><span>Vender</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarPagos" onClick="gestionarPagos()">Listar  Pagos</span></a>
                <a  class="button mediano naranja" href="#"><span class="icomenu2-pagos-atras">Atras</span></a>
            </div>
			<!--  local end-->
        </div>
        
        <div class="notiDetalle2" id="detalle"></div>
        <div class="notiDetalle2" id="detalle2" style="border: 0px">
            <h1>Nuevo Producto</h1>
<div id="formularioProductos" class='contacto' ><!--formulario de registro de productos-->
    <form name="registroproductos" action="RegistrandoProducto.php" method="post" enctype="multipart/form-data" onSubmit="return checkForm(this);" >
    <div><label>N° Guia:<spam class="requerido">*</spam><? $consulata_guia=dime("select idguias,numero_guia from guias where estado_guia='1' order by  idguias desc");
    echo"<select id ='guias1' name='guias1' class='select' onchange='mostrarfecha()' >
	     <option value=''>Seleccione</option>";
		while($tipoProg=mysql_fetch_array($consulata_guia)){
    	echo"<option  value='".$tipoProg['idguias'] ."'>".$tipoProg['numero_guia'] ."</option>";}
	echo"</select>
        
";?> <div id="fechaguia">
  
</div></label></div>  
        <div><label>Codigo Producto:<spam class="requerido">*</spam><br/><input type="text" name="codigoProducto" id="codigoProducto" size="60" maxlength="120" value="" onBlur="checkField(this);" /> </label></div>  
<div><label>Descripcion Producto:<spam class="requerido">*</spam><br/>
        <textarea  name='cadenatexto' id="cadenatexto"  onblur="checkField(this);" rows='2' cols='50'>
</textarea>  </label></div>  
<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
<div class="ocultar"><label>Unid Medida:<br/>
        <input type="text" name="txtund" size="10" maxlength="5" value="" /></label></div> 
<div class="ocultar"><label>Medidas:<br/><input type="text" name="txtmedidas" size="10" maxlength="5" value="" /></label></div> 
<div><label>Precio Venta sin  Ipm. :<spam class="requerido">*</spam><br/>
        <input type="text" name="txtPrecio" id="txtPrecio" size="10" maxlength="10" value="" onBlur="checkField(this);"/> </label></div> 
<div class="ocultar"><label>Precio ML:<br/><input type="text" name="txtPrecioM2" size="10" maxlength="10" value="" /> </label></div> 
<div><label>Precio Compra:<spam class="requerido">*</spam><br/><input type="text" name="txtPrecioMayorista" id="txtPrecioMayorista" size="10" maxlength="10" value="" onBlur="checkField(this);"/> </label></div>  
<div><label>Categoria:<spam class="requerido">*</spam><br/><? $consulata_tipo=dime("select idtipos_de_productos,nombre_tipo_producto from tipos_de_productos where estado_tipo_producto= '1' order by  idtipos_de_productos desc");
    echo"<select id ='tipoProductos' name='tipoProductos' class='select'>
	     <option value=''>Categoria</option>";
		while($tipoPro=mysql_fetch_array($consulata_tipo)){
    	echo"<option value='".$tipoPro['idtipos_de_productos'] ."'>".$tipoPro['nombre_tipo_producto'] ."</option>";}
	echo"</select>";?>
 </label></div> 
<div><label>Cantidad:<spam class="requerido">*</spam><br/><input type="text" name="txtCantidad" id="txtCantidad" size="10" maxlength="10" value="" onBlur="checkField(this);"/></label></div>
<div><label>Cantidad Minima:<spam class="requerido">*</spam><br/><input type="text" name="txtCantidadMinima" size="5" maxlength="10" value="5" /></label></div>
<div><label>Fecha Caducidad:<br/>   <input type="text" name="txtFechaCadu" id="campofecha"></input>  </label> </div>
<div><label><b>Imagen: <spam class="requerido">*</spam></b> <br/>
    <input name="file1" type="file" id="file1" /><br/> </label></div>  
    <input type="submit" value="Registrar" />
</form>
 </div>
    <div id="formularioCategorias" class="contacto"><!--fFORMULARIO CATEGORIAS-->
<form action="RegistrandoCategorias.php" method="post" enctype="multipart/form-data" onSubmit="return checkForm(this);" >
    Nombre Categoria:<spam class="requerido">*</spam><input type="text" name="txtNombreCategoria" id="txtNombreCategoria" size="60" maxlength="120" value="" onBlur="checkField(this);"/> <br>
Sub Categoria:<spam class="requerido">*</spam><? $consulata_tipo=dime("select idtipos_de_productos,nombre_tipo_producto from tipos_de_productos where estado_tipo_producto ='1' order by  idtipos_de_productos desc");
    echo"<select id ='subCategria' name='subCategria' class='select'>
	     <option value='0'>0</option>";
		while($tipoPro=mysql_fetch_array($consulata_tipo)){
    	echo"<option value='".$tipoPro['idtipos_de_productos'] ."'>".$tipoPro['nombre_tipo_producto'] ."</option>";}
	echo"</select><br>";
?>

<!--############################################combos anidados################# 
<select name="select2" id="select2">
<option selected value="0">Seleccione</option>
</select>
<!--end ############################################combos anidados##################end-->
    <input type="submit" value="Registrar" />
</form>
 </div>
 </div>
        <div class="notiDetalle2" id="detalle6" style="border: 0px;"><!-- !!!!!!!!	FORMULARIO PROVEEDORES !!!!!!!!!!!!!!!!!!!!! 
     	  <div class='cerrar' >
     <a  class="button mediano naranja" href="#"><span class="icomenu3-proveedores-atras">Atras</span></a>
    </div>-->
            <h1>Nuevo Proveedor</h1>
            <form action="RegistrandoProveedor.php" method="post"  class="contacto" onSubmit="return checkForm(this);" >
                N° Ruc<spam class="requerido">*</spam>:<br><input type="text" name="RucProvedor" id="RucProvedor" onBlur="checkField(this);" size="15" maxlength="15" value="" />   <br>
                    Nombre<spam class="requerido">*</spam>:<br><input type="text" name="textNomProvedor" id="textNomProvedor" size="60" maxlength="120" value="" onBlur="checkField(this);"/> <br>
                        Telefono<spam class="requerido">*</spam>:<br><input type="text" name="textTeleProvdor" id="textTeleProvdor" size="60" maxlength="120" value="" onBlur="checkField(this);"/> <br>
Descripcion:<br><textarea name="textDescriProvedor"   cols="60" rows="10" tabindex="4"  >
</textarea>
<br>
    <input type="submit" value="Registrar" />
</form>
                 
 </div>
        <div class="notiDetalle2" id="detalle7" style="border: 0px; height: 200px;"><!-- !!!!!!!!	para editar guias !!!!!!!!!!!!!!!!!!!!! -->
            <h1>Nueva Guia</h1>
            <form action="RegistrandoGuia.php" method="post" class="contacto" nSubmit="return checkForm(this);" onSubmit="return checkForm(this);" >
          N°<spam class="requerido">*</spam>:<input type="text" name="numeroguia" id="numeroguia" size="15" maxlength="15" value="" onBlur="checkField(this);"/>   <br>
    Fecha<spam class="requerido">*</spam>:<input type="text" name="textfechaguia" size="60" maxlength="120" id="campofecha2" value=""  onblur="checkField(this);"/> <br>
Proveedor<spam class="requerido">*</spam>:<?php
$consulata_tipo2=dime("select idproveedor,nombre_proveedor from  proveedor where estado_proveedor='1' order by  idproveedor desc");
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
   
  
  <div class="notiDetalle2" id="detalle3" style="border: 0px;"><!-- !!!!!!!!	detalle3 !!!!!!!!!!!!!!!!!!!!! -->

  </div>
  <div class="notiDetalle2" id="DivBuscar"><!-- !!!!!!!!	para editar DivBuscar guias !!!!!!!!!!!!!!!!!!!!! -->
      <h1>Buscar Proroductos</h1>     
      <form class="contacto" name="frmbusqueda" action="" onKeyPress="buscarDato();" >
       <div id="men" style="background-color:red;"></div> <div align="center">Producto a buscar por (Nombre, Codigo, Categoria):
    <input type="text" name="dato" /> 
  </div>
</form>
<fieldset><legend>Resultado</legend>
<div id="resultadoBusqueda" style=" background-color:#ffffff;"></div>
</fieldset>
   </div>
       <div class="notiDetalle2" id="detalle5"  style="border: 0px;"><!-- !!!!!!!!	para editar producto !!!!!!!!!!!!!!!!!!!!! --></div>

  

       <div class="notiDetalle2" id="detalle72" style="border: 0px;"><!-- !!!!!!!!	para editar producto !!!!!!!!!!!!!!!!!!!!! --></div>
   <div class="notiDetalle2" id="detalle73" style="border: 0px;"><!-- !!!!!!!!	para editar producto !!!!!!!!!!!!!!!!!!!!! --></div>
   
 <div class="notiDetalle2" id="detalle62" style="border: 0px;  " ><!-- !!!!!!!!	para editar producto !!!!!!!!!!!!!!!!!!!!! -->
 
 
 
 </div>

<div class="notiDetalle2" id="detalle4"><!-- !!!!!!!!	para editar tipo de producto !!!!!!!!!!!!!!!!!!!!! --></div>
<div class="notiDetalle2" id="productos_caducos" style=" border: 0px;"><? include 'fecha.php'; ?></div>


 <div id="detalle31">
     
 
 </div>
<div class="notiDetalle3" id="div-stock">
<img src="imagenes/stock.jpg" width="650px" height="280px" />
</div>
 <!-- nuevo cliente -->
 <div id="formulario-cliente-nuevo" class="notiDetalle3" style="border: 0px;" >
     <h1>Nuevo Cliente</h1>
 <form action="registrandoCliente.php" method="post" enctype="multipart/form-data"  class="contacto" onSubmit="return checkForm(this);">
     <div><label>Nombre <spam class="requerido">*</spam>:</br><input type="text" name="nombre" id="nombre" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
     <div><label>DNI<spam class="requerido">*</spam>:</br><input type="text" name="dni" id="dni" size="10" maxlength="9" value="" onBlur="checkField(this);"/><br></label></div>
<div><label>Nombre Comercial:</br><input type="text" name="nombrecomercial" maxlength="120"size="60"  value="" /><br></label></div>
<div><label>RUC:</br><input type="text" name="ruc" size="10" maxlength="12" value="" /> <br></label></div>
<div><label>Direccion<spam class="requerido">*</spam>:</br><input type="text" name="direccion" id="direccion" size="50" maxlength="100" value="" onBlur="checkField(this);"/><br></label></div> 
<div><label>Telefono1<spam class="requerido">*</spam>:<input type="text" name="telefono1" id="telefono1" size="15" maxlength="15" value="" onBlur="checkField(this);"/> <br/></label></div>
<div><label>Telefono2:<input type="text" name="telefono2" size="15" maxlength="20" value="" /> <br/></label></div>
<div><label>Email:</br><input type="text" name="email" size="60" maxlength="60" value="" /> <br/></label></div>
<div><label>Web:</br><input type="text" name="web" size="10" maxlength="50" value="" /> <br/></label></div>
     <input type="submit" value="Registrar" />
</form>
<!--para boton abajo-->
                 <div class="icomenu2-clientes">
                    <a  class="button mediano azul" href="#"><span class="divNuevoCliente" >Nuevo Cliente</span></a>
                   <a class="button mediano azul" href="#"><span class="gestionarClientes" onClick="gestionarCliente()">Listar Clientes</span></a>

                <a  class="button mediano azul" href="#"><span class="buscarCliente" >Buscar Cliente</span></a>
                 <a  class="button mediano naranja" href="#"><span class="icomenu2-clientes-atras">Atras</span></a>
            </div>
<!--para boton abajo end-->
    </div>
 <!-- nuevo cliente END-->
 <!-- listar clientes-->
 <div class="notiDetalle2" id="listacliente" style="border: 0px"  >
 
  </div>

 
 <!-- listar clientes end-->
 <!-- buscar proveedores -->
        <div class="notiDetalle2" id="DivBuscarProveedor" style="border: 0px"><!-- !!!!!!!!	para editar DivBuscar guias !!!!!!!!!!!!!!!!!!!!! -->
            <h1>Buscar Proveedor</h1>
            <form class="contacto" name="frmbusquedaProveedor" action="" onKeyPress="buscarDatoProveedor();">
       <div id="men" style="background-color:red;"></div> <div align="center">Proveedor a buscar (Nombre):
    <input type="text" name="dato" /> 
  </div>
</form>
<fieldset><legend>Resultado</legend>
<div id="resultadoBusquedaProveedor" style=" background-color:#ffffff;"></div>
</fieldset>
            <!--para boton abajo-->
      <div class="icomenu2-proveedores">
                <a  class="button mediano azul" href="#"><span class="divNuevoProveedor" >Proveedor Nuevo</span></a>
                <a  class="button mediano azul" href="#"><span class="gestionarProvedores" onClick="gestionarPro()">Listar Proveedores</span></a>
                <a  class="button mediano naranja" href="#"><span class="icomenu2-proveedores-atras">Atras</span></a>
            </div>
<!--para boton abajo end-->
   </div>
 
 <!-- buscar proveedores end-->
 <!-- buscar clientes -->
 <div class="notiDetalle2" id="DivBuscarClientes" style="  border: 0px;"><!-- !!!!!!!!	para editar DivBuscar guias !!!!!!!!!!!!!!!!!!!!! -->
     <h1>Buscar Clientes</h1> <form class="contacto" name="frmbusquedaCliente" action="" onKeyPress="buscarDatoCliente();">
       <div id="men" style="background-color:red;"></div> <div align="center">Cliente a buscar (Nombre):
    <input type="text" name="dato" /> 
  </div>
</form>
<fieldset><legend>Resultado</legend>
<div id="resultadoBusquedaCliente" style=" background-color:#ffffff;"></div>
</fieldset>
   </div>
 <div class="notiDetalle2" id="listacliente-editar"  style="border: 0px" >
       
  </div>
 
 <!-- buscar clientes end-->
 <!-- documentos -->
 <div id="formularioDocumentos" class="notiDetalle2"  style="border: 0px; ">
     <h1>Nuevo Documento</h1>
       <form action="registrandoDocumento.php" method="post" enctype="multipart/form-data"  class="contacto"  onSubmit="return checkForm(this);">
       <div><label>Nombre<spam class="requerido">*</spam> :</br><input type="text" name="nombredocumento" id="nombredocumento" onBlur="checkField(this);" size="60" maxlength="120" value="" /> 
</label></div>
 <input type="submit" name="subbtn" id="subbtn" value="Registrar" />
</form>   
 </div>
 <div id="listarDocumentos" class="notiDetalle2" style="border: 0px; "></div>
 <div id="editDocumentos" class="notiDetalle2" style="border: 0px; "></div>
 <!-- documentos end-->
 <!-- servicios -->
 <div id="formularioServicios" class="notiDetalle2" style="border: 0px; " >
     <h1> Nuevo Servicio</h1>
   <form action="registrandoServicio.php" method="post" enctype="multipart/form-data"  class="contacto" onSubmit="return checkForm(this);">
       <div><label>Nombre <spam class="requerido">*</spam>:</br><input type="text" name="nombreservicio" id="nombreservicio" size="60" maxlength="120" value=""  onblur="checkField(this);"/> 
</label></div>
       <div><label>Numero de Serie<spam class="requerido">*</spam> :</br><input type="text" name="numeroserie" id="numeroserie" size="60" maxlength="120" value="" onBlur="checkField(this);"/> 
</label></div>

 <input type="submit" value="Registrar" />
</form>   
 </div>
 <div id="listarServicios" class="notiDetalle2" style="border: 0px; "></div>
 <div id="editServicios" class="notiDetalle2" style="border: 0px; "></div>
 <!-- servicios end-->  
   <!-- documento servicio-->
 <div id="formularioDS" class="notiDetalle2" style="border: 0px; " >
     <h1>Nuevo Documento Servicio</h1>
   <form action="registrandoDS.php" method="post" enctype="multipart/form-data"  class="contacto" onSubmit="return checkForm(this);">
       <div><label>Rango1<spam class="requerido">*</spam>:</br><input type="text" name="rango1" id="rango1" onBlur="checkField(this);" size="60" maxlength="120" value="" /> </label></div>
       <div><label>Rango2<spam class="requerido">*</spam>:</br><input type="text" name="rango2" id="rango2" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
       <div><label>Numero Actual<spam class="requerido">*</spam>:</br><input type="text" name="numeroactual" id="numeroactual" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>

       Servicio <spam class="requerido">*</spam>:<?php
$consulata_tipo2=dime("select idservicio,nombre_servicio from servicio where  estado_servicio='1'  order by  idservicio desc");
    echo"<select id ='servicio' name='servicio' id='servicio' class='select' >
	     <option value='0'>Seleccione</option>";
		while($servicio=mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$servicio['idservicio']."'>".$servicio['nombre_servicio']."</option>";}
	echo"</select></br>";
?> 


Documentos<spam class="requerido">*</spam>:<?php
$consulata_tipo3=dime("select iddocumentos,nombre_documento from  documentos where estado_documento='1' order by  iddocumentos desc");
    echo"<select id ='documentos' name='documentos' class='select'>
	     <option value='0'>Seleccione</option>";
		while($documentos=mysql_fetch_array($consulata_tipo3)){
    	echo"<option value='".$documentos['iddocumentos']."'>".$documentos['nombre_documento']."</option>";}
	echo"</select></br>";
?> 
Local<spam class="requerido">*</spam>:<?php
$consulata_tipo4=dime("select idlocal, nombre_local  from local where estado_local='1' order by  idlocal desc");
    echo"<select id ='local' name='local' class='select'>
	     <option value='0'>Seleccione local</option>";
		while($lo=mysql_fetch_array($consulata_tipo4)){
    	echo"<option value='".$lo['idlocal']."'>".$lo['nombre_local']."</option>";}
	echo"</select>";
?> 

 <input type="submit" value="Registrar" />
</form>   
 </div>
 <div id="listarDS" class="notiDetalle2" style="border: 0px;   "></div>
 <div id="editDS" class="notiDetalle2" style="border: 0px;   "></div>
 <!-- documento servicio end-->  
<!-- documento personal-->
 <div id="formularioPersonal" class="notiDetalle2" style="border: 0px; " >
     <h1>Personal</h1>
   <form action="registrandoPersonal.php" method="post" enctype="multipart/form-data"  class="contacto" onSubmit="return checkForm(this);">
       <div><label>Nombre Persoal<spam class="requerido">*</spam>:</br><input type="text" name="nombreusuario" id="nombreusuario" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
       <div><label>DNI <spam class="requerido">*</spam>:</br><input type="text" name="dniusuario" id="dniusuario" size="60" maxlength="120" value=""onblur="checkField(this);" /> </label></div>
<div><label>Sexo :</br> 
<select name="sexousuario">
    <option value="0">Femenino</option>
    <option value="1">Masculino</option>
</select>
</label></div>
<div><label>Nick <spam class="requerido">*</spam>:</br><input type="text" name="nickusuario" id="nickusuario" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
<div><label>Pass <spam class="requerido">*</spam>:</br><input type="text" name="passusuario" id="passusuario" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
<div><label>Email<spam class="requerido">*</spam>:</br><input type="text" name="emailusuario" id="emailusuario" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
<div><label>Telefono <spam class="requerido">*</spam>:</br><input type="text" name="telefonousuario" id="telefonousuario" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
<div><label>Celular <spam class="requerido">*</spam>:</br><input type="text" name="celularusuario" id="celularusuario" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
<div><label>Direccion <spam class="requerido">*</spam>:</br><input type="text" name="direccionusuario" id="direccionusuario" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
Usuario / Cargo<spam class="requerido">*</spam>:<?php
$consulata_tipo2=dime("select idtipos_usuarios,nombre_tipo_usuario from  tipos_usuarios where estado_tipo_usuario='1' order by  idtipos_usuarios desc");
    echo"<select id ='tipousuario' name='tipousuario' class='select'>
	     <option value='0'>Seleccione</option>";
		while($servicio=mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$servicio['idtipos_usuarios']."'>".$servicio['nombre_tipo_usuario']."</option>";}
	echo"</select>";
?> 
 <input type="submit" value="Registrar" />
</form>   
 </div>
 <div id="listarPer" class="notiDetalle2" style="border: 0px;   "></div>
 <div id="editPer" class="notiDetalle2" style="border: 0px;   "></div>
 <!-- documento personal end--> 
 <!-- TU -->
 <div id="formulariotipousuario" class="notiDetalle2" style="border: 0px; " >
     <h1>Nuevo Cargo
     </h1>
   <form action="registrandoTipoUsuario.php" method="post" enctype="multipart/form-data"  class="contacto" onSubmit="return checkForm(this);">
       <div><label>Nombre Cargo<spam class="requerido">*</spam>:</br><input type="text" name="nombre_tipo_usuario" id="nombre_tipo_usuario" size="60" maxlength="15" value="" onBlur="checkField(this);"/> </label></div>
       <div><label>Observacion<spam class="requerido">*</spam>:</br><input type="text" name="observacion_tipo_usuario" id="observacion_tipo_usuario" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
  <input type="submit" value="Registrar" />
</form>   
 </div>
 <div id="listarTU" class="notiDetalle2" style="border: 0px;     "></div>
 <div id="editTU" class="notiDetalle2" style="border: 0px;    "></div>
 <!-- TU end-->   
  <!-- LO-->
 <div id="formularioLocal" class="notiDetalle2" style="border: 0px; " >
  <h1>Nuevo Local</h1> <form action="registrandoLocal.php" method="post" enctype="multipart/form-data"  class="contacto" onSubmit="return checkForm(this);">
       <div><label>Nombre Local<spam class="requerido">*</spam>:</br><input type="text" name="nombre_local" id="nombre_local" size="60" maxlength="30" value="" onBlur="checkField(this);"/> </label></div>
       <div><label>Ciudad<spam class="requerido">*</spam>:</br><input type="text" name="ciudad_local" id="ciudad_local" size="60" maxlength="120" value="" /> </label></div>
       <div><label>Departamento<spam class="requerido">*</spam>:</br><input type="text" name="departamento_local" id="departamento_local" size="60" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
       <div><label>Direccion Local<spam class="requerido">*</spam>:</br><input type="text" name="direccion_local" size="60" id="direccion_local" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
       <div><label>Telefono Local<spam class="requerido">*</spam>:</br><input type="text" name="telefono_local" size="60"  id="telefono_local" maxlength="120" value="" onBlur="checkField(this);"/> </label></div>
  <input type="submit" value="Registrar" />
</form>   
 </div>
   <div id="listarLO" class="notiDetalle2" style="border: 0px;    "></div>
 <div id="editLO" class="notiDetalle2" style="border: 0px;    "></div>


 <!-- LO end--> 
 <!-- Usuario Local--> 
  
 <div id="formularioLocalUsuario" class="notiDetalle2" style="border: 0px; " >
     <h1>Asignar Local a Personal</h1><form action="registrandoLocalUsuario.php" method="post" enctype="multipart/form-data"  class="contacto">
Local<spam class="requerido">*</spam>:<?php
$consulata_tipo2=dime("select * from  local where estado_local='1' order by  idlocal desc");
    echo"<select id ='local' name='local' class='select'>
	     <option value='0'>Seleccione Local</option>";
		while($local=mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$local['idlocal']."'>".$local['nombre_local']."</option>";}
	echo"</select></br>";
?>
Usuario<spam class="requerido">*</spam>:<?php
$consulata_tipo2=dime("select idusuarios,nombre_usuario from  usuarios where estado_usuario='1' order by  idusuarios desc");
    echo"<select id ='usuario' name='usuario' class='select'>
	     <option value='0'>Seleccione Usuario</option>";
		while($local=mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$local['idusuarios']."'>".$local['nombre_usuario']."</option>";}
	echo"</select>";
?> 
 
  <input type="submit" value="Registrar" />
</form>   
 </div>
  <div id="listarUsLo" class="notiDetalle2" style="border: 0px;     "></div>
 <div id="editUsLo" class="notiDetalle2" style="border: 0px;     "></div>
 <!-- Usuario local end--> 
 <!-- pagos --> 
   <div id="listarPago" class="notiDetalle2" style="border: 0px;  "></div> 
 <div id="listarDetallePago" class="notiDetalle2" style="border: 0px;   "></div>
 <!-- pagos end--> 
 <!-- ventasreportesfformulario --> 
  
 <div id="formularioreportesFechasVentas" class="notiDetalle2" style="border: 0px; " >
     
     <form id="fechaventasreporte" name="entrefechas" action="alphabarex1.php" method="GET"  class="contacto" target="_blank">
        Ver  productos vendidos entre fechas </br>
        Fecha Inicio:<input size="10" style="width: 70px;" type="text" name="f1" class="campofechaf"></input> 
        Fecha Fin:<input size="10" style="width: 70px;" type="text" name="f2" class="campofechaf"></input>
        <input type='hidden' name='parametros' value='2'></input>
        <input type="submit" value="Consultar" onClick=" " />
    </form>   
 </div>
  
 <!-- ventasreportesfformulario  end--> 
  <!-- end #mainContent --></div>
  <div id="footer">
  <!--<div class="bandera"><img src="imagenes/alemania.png" width="15" height="10" /> <img src="imagenes/ingles.png" width="15" height="10" /> <img src="imagenes/peru.png" width="15" height="10" /> <img src="imagenes/italia.png" width="15" height="10" /> <img src="imagenes/japon.png" width="15" height="10" /></div>-->
    <div class="derecha"> </div>
<!-- end #footer --></div>
<!-- end #container --></div>

</body>
</html>