<?php 
session_start(); 
$carro=$_SESSION['carro']; 
$cliente=$_SESSION['cliente']; 
include("../func/funciones.php");
#include('login.php');

?> 
<html> 
<head> 
<title>PRODUCTOS AGREGADOS AL CARRITO</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script src="nicEdit/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#divRuc").click(function(evento)
      {  
	   $(".stock").css("display", "block");   
	   $("#ocultarStock").css("display", "block"); 
	/*   $(".opcionesMenu2").css( { color: "#FFFFFF", background: "#ACC7ED" });*/ 
	  });
		 $("#ocultarStock").click(function(evento)
      {  
	   $(".stock").css("display", "none");   
	   $("#ocultarStock").css("display", "none"); 
	  });  
		})
 </script>
<!--cuando ahcemos click en divRuc entonces muestra estock !!!!!!!!!!!!! -->
<style type="text/css"> 
<!--  
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
body{
	background-color: #EEE;
}
#montoTotal{ margin-left:495px}
.stock{ color: #E00;
display:none;
 }
#divRuc{ width:224px;
margin:0px;
}
#facturaDiv{ width:224px;
margin:0px;
} #ocultarStock{ width:256px;display:none; float:left;}
 #logo{ width:256px; float:left;}
#documento{ float:left; }
#tabla{ clear:both;
width:720px;
margin-top:15px; }
#clienteDiv{ clear:both; }
#resultadoBusqueda{ width:200px; }  --> 
</style>
</head>
<body>
<!--<form method="post" action="registrandoFactura.php">-->
<? require ('ya.php'); ?>
<br>
<b><a href='ventas.php'> &lt;- </a></b>/ <a href="cancelar.php">x</a>
<div id="ocultarStock"><h1 align="center">OCULTAR</h1></div>
<div id="logo"><img src="../imagenes/cyg.png" width="256" height="152"></div>
<div id="documento">
<div id="divRuc">
  <h1 align="center">Contrato</h1></div> 
<div id="facturaDiv">
 <h1 align="center">&nbsp;</h1>

 <DIV id="numeroFacturaDiv"><?
 $copnsulta=dime("select numero_documento from documentos  where `tipo_de_documentos_idtipo_de_documentos` = '3' order by numero_documento desc ")or die(ovni("Oo"));
 $numeroDocumento = mysql_fetch_assoc($copnsulta);
echo "<h1 align='center'>N - ".(($numeroDocumento['numero_documento'])+1)."</h1>"; ?>
     </DIV> 
...
</div> 
</div>
<?php 
if($carro){ 
?>
<div id="clienteDiv"> 
  <p><?  foreach($cliente as $q => $c){
	  echo"Ruc:".$c['ruc']."<br> 
	       DNI Cliente:".$c['dni_cliente']."<br>
	       Nombre Cliente:".$c['nombre_cliente']."<br>
		   Direccion:".$c['direccion_cliente'];
	  }?>
</p>
</div>

<div id="tabla">
<table width="720" border="0" cellspacing="0" cellpadding="0" align="center">
<tr bgcolor="#333333" class="tit">
<td width="105">CANTIDAD</td>
<td width="207">DESCRIPCION</td>
<td colspan="2" align="center">PRECIO UNITARIO</td><td width="100" align="center">SUBTOTAL</td>
<td width="100" align="center">Borrar</td>
<td width="159" align="center">Actualizar</td>
</tr>
<?php 
 $color=array("#ffffff","#F0F0F0");  $contador=0;  $suma=0; 
 foreach($carro as $k => $v){ 
 $subto=$v['cantidad']*$v['precio']; 
 $suma=$suma+$subto; 
 $contador++; 
 ?> 
 <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacarContrato.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>"> 
 <tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'> 
 <td><div class="stock"><b><?php echo ($v['stock']-$v['cantidad']) ?></b></div>
   <input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">  
    <input name="id" type="hidden" id="id" value="<?php echo $v['idproductos'] ?>"></td> 
 <td><?php echo $v['descripcion_producto'] ?></td> 
 <td width="43" align="center">&nbsp;</td> 
 <td width="136" align="center"><?php echo $v['precio'] ?></td><td width="100" align="center"><?php echo ($v['precio']*$v['cantidad']) ?></td> 
 <td align="center"><a href="borracarContrato.php?<?php echo SID ?>&id=<?php echo $v['idproductos'] ?>"><img src="../imagenes/trash.gif" width="12" height="14" border="0"></a></td> 
 <td align="center"> 
 <input name="imageField" type="image" src="../imagenes/actualizar.gif" width="20" height="20" border="0"></td>

 </tr>
 </form>
<?php }?>
   <tr>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">TOTAL</td>
     <td align="center"><?php $sub=number_format($suma,2); echo number_format($sub,2); ?></td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>

 
</table> 
<div align="center"><span class="prod">Total de Artículos: <?php echo count($carro); ?></span></div><br> 
<div align="center"><span class="prod">Continuar la selección de productos</span> 
 <a href="catalogo3.php?<?php echo SID;?>"><img src="../imagenes/continuar.gif" width="13" height="13" border="0" align="absmiddle"></a>&nbsp; 
 <a href="regpago.php?<?php echo SID;?>&costo=<?php echo $suma; ?>"><!--<img src="../imagenes/finalizarcompra.gif" width="135" height="16" border="0" align="absmiddle">--></a><a href="cancelar.php">(X)</a></div> 
</div>

<?php }else{ ?> 
<p align="center"> <span class="prod">No hay productos seleccionados</span> <a href="catalogo3.php?<?php echo SID;?>"><img src="../imagenes/actualizar.gif" width="13" height="13" border="0"></a> 
 <?php }?> 
</p> 
<form name="formularioGuardar" action="registrandoContrato.php" method="post">
<input type="submit" name="Submit" value="Ingresar"/>
<textarea name="editor1" cols="100" rows="10"><?php echo  $row[1]; ?></textarea> <script type="text/javascript"> CKEDITOR.replace( 'editor1' ); </script>
<input type="hidden" name="tipoDocumento" value="3">


<?  foreach($cliente as $q => $c){
	  echo "<input type='hidden' name='id_cliente' value='".$c['idclientes']."'>";      
	  }
	  echo "<textarea style='display: none;' name='detalle_documento' id='textarea' cols='45' rows='5'>";
	 foreach($carro as $k => $v){ 
	  $unidad=$v['cantidad']>1?" unidades de ":" unidad de "; 
  
	 echo $v['cantidad'].$unidad.$v['descripcion_producto'].","; 
	 }  echo "</textarea>"; 
	 echo "<input type='hidden' name='fecha_factura' value='20".date("y/d/m")."'> ";
	 $copnsulta=dime("select numero_documento from documentos  where `tipo_de_documentos_idtipo_de_documentos` = '2' order by numero_documento desc ")or die(ovni("Oo"));
	 $numeroDocumento = mysql_fetch_assoc($copnsulta);
	 echo "<input type='hidden' name='numero_documento' value='000".(($numeroDocumento['numero_documento'])+1)."'> ";
	 echo "<input type='hidden' name='monto_total' value='".number_format($igv+$sub,3)."'> ";
	  ?>
</form>
</body> 
</html> 