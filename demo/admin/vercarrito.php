<?php 
session_start(); 
$carro=$_SESSION['carro']; 
$cliente=$_SESSION['cliente']; 
include("../func/funciones.php");
include('login.php');

?> 
<html> 
<head> 
<title>PRODUCTOS AGREGADOS AL CARRITO</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>

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
 <link href="../css/venta.css" rel="stylesheet" type="text/css" />
<style type="text/css"> 
</style>
</head>
<body>
<!--<form method="post" action="registrandoFactura.php">-->
<? require ('ya.php'); ?>
<br><b><a href='ventas.php'> &lt;- </a></b>/ <a href="cancelar.php">Cancelar</a>

<div id="ocultarStock"><h1 align="center">OCULTAR</h1></div>
<div id="logo"><img src="#" width="256" height="152"></div>
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

<div id="documento">
<div id="divRuc"><h1 align="center">RUC:10401978807</h1></div> 
<div id="facturaDiv"><h1 align="center">FACTURA</h1>
 <DIV id="numeroFacturaDiv"> 
 </DIV> 
                  

</div> 
</div>
<?php 
if($carro){ 
?>
      <div style=" padding:10px 0px 10px 300px; font-size:24px; -moz-border-radius:3px;  border-radius:3px; width:400px; float:left; ">
      
        <form name="frmbusqueda2"  onKeyPress="buscarClienteFactura();">
    Buscar Cliente:
  <input type="text" name="dato" id="dato"/></form>
 <fieldset><legend>Resultado</legend> 
  <div id="resultadoBusqueda2"></div>
 </fieldset>

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
 <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregacar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>"> 
 <tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'> 
 <td><div class="stock"><b><?php echo ($v['stock']-$v['cantidad']) ?></b></div>
   <input name="cantidad" type="text" id="cantidad" value="<?php echo $v['cantidad'] ?>" size="8">  
    <input name="id" type="hidden" id="id" value="<?php echo $v['idproductos'] ?>"></td> 
 <td><?php echo $v['descripcion_producto'] ?></td> 
 <td width="43" align="center">&nbsp;</td> 
 <td width="136" align="center"><?php echo $v['precio'] ?></td><td width="100" align="center"><?php echo ($v['precio']*$v['cantidad']) ?></td> 
 <td align="center"><a href="borracar.php?id=<?php echo $v['idproductos'] ?>"><img src="../imagenes/trash.gif" width="12" height="14" border="0"></a></td> 
 <td align="center"> 
 <input name="imageField" type="image" src="../imagenes/actualizar.gif" width="20" height="20" border="0"></td>

 </tr>
 <tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'>

 </form>
<?php }?> <td align="center">&nbsp;</td>
<td align="center"><?php  #echo $v['identificador'] ?></td>
<td align="center">&nbsp;</td>
<td align="center">SUBTOTAL: $</td>
<td align="center"><?php echo number_format($suma,2); $sub=number_format($suma,2); ?></td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>  <tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">IGV</td>
     <td align="center"><?php echo number_format(0.18*$sub); $igv=number_format(0.18*$sub); ?></td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>
   <tr>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
     <td align="center">TOTAL</td>
     <td align="center"><?php echo number_format($igv+$sub); ?></td>
     <td align="center">&nbsp;</td>
     <td align="center">&nbsp;</td>
   </tr>

 
</table> 
<div align="center"><span class="prod">Total de Art�culos: <?php echo count($carro); ?></span></div><br> 
<div align="center"><span class="prod">Continuar la selecci�n de productos</span> 
 <a href="catalogo.php?<?php echo SID;?>"><img src="../imagenes/continuar.gif" width="13" height="13" border="0" align="absmiddle"></a>&nbsp; 
 <a href="regpago.php?<?php echo SID;?>&costo=<?php echo $suma; ?>"><!--<img src="../imagenes/finalizarcompra.gif" width="135" height="16" border="0" align="absmiddle">--></a><a href="cancelar.php">(X)</a>
</div> 
 </div>

<?php }else{ ?> 
<p align="center"> <span class="prod">No hay productos seleccionados</span> <a href="catalogo.php?<?php echo SID;?>"><img src="../imagenes/actualizar.gif" width="13" height="13" border="0"></a> 
 <?php }?> 
</p> 
<form name="formularioGuardar" action="registrandoFactura.php" method="post">
<input type="hidden" name="tipoDocumento" value="1">
<?  foreach($cliente as $q => $c){
	  echo "<input type='hidden' name='id_cliente' value='".$c['idclientes']."'>";      
	  }
	  echo "<textarea style='display: none;' name='detalle_documento' id='textarea' cols='45' rows='5'>";
	 foreach($carro as $k => $v){ 
	  $unidad=$v['cantidad']>1?" unidades de ":" unidad de "; 
  
	 echo $v['cantidad'].$unidad.$v['descripcion_producto'].","; 
	 }  echo "</textarea>"; 
	 echo "<input type='hidden' name='fecha_factura' value='20".date("y/d/m")."'> ";
	 //$copnsulta=dime("select numero_documento from documentos order by numero_documento desc  ")or die(ovni("Oo"));
	 //$numeroDocumento = mysql_fetch_assoc($copnsulta);
	 //echo "<input type='hidden' name='numero_documento' value='000".(($numeroDocumento['numero_documento'])+1)."'> ";
	 echo "<input type='hidden' name='monto_total' value='".number_format($igv+$sub,3)."'> ";
	  ?>
      
 <input type="submit" name="Submit" value="Ingresar"/>
 
</form>
</body> 
</html> 