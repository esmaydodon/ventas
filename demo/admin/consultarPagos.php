 <?
include("../func/funciones.php");
$idc = $_POST['id'];//para naa practicamente :p
#para paginar
$RegistrosAMostrar=10;
//estos valores los recibo por GET enviados por aki  a un js 
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
} # para paginar
$consulta = dime("select pa.hora_pago,pa.idpago,local.nombre_local,do.nombre_documento,pa.numero_documento,pa.fecha_pago,u.nombre_usuario,c.nombre_cliente,c.dni_cliente,c.ruc,pa.monto from pago pa inner join documento_servicio ds on
pa.iddocumento_servicio=ds.iddocumento_servicio inner join documentos do on ds.iddocumentos=do.iddocumentos 
inner join usuarios u on
pa.idusuarios=u.idusuarios inner join clientes c on
pa.idcliente =c.idcliente inner join local l on
ds.idlocal=l.idlocal  inner join local on 
pa.idlocal=local.idlocal  ORDER BY idpago desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ")or die(ovni("consultar PAGOS"));
echo "<h1>Pagos</h1>  <div id='myPrintArea'>
    <table width='650' border='1' class='tabla'> 
         <tr class='encabezado' >
         <td>ID</td>
         <td>Local</td>
         <td>Documento</td>        
         <td>Numero</td>        
         <td>Fecha</td>        
         <td>Atendido Por</td>        
         <td>Cliente</td>        
         <td>Dni</td>        
         <td>Ruc</td>        
         <td>Monto</td>        
          <td>Detalle</td> </tr>";
while($DS = mysql_fetch_array($consulta)){
	echo "
<tr><td>". $DS['idpago']."</td>
     <td>". $DS['nombre_local']."</td>   
     <td>". $DS['nombre_documento']."</td>   
     <td>". $DS['numero_documento']."</td>      
     <td>". $DS['hora_pago']."</td>   
     <td>". $DS['nombre_usuario']."</td>   
     <td>". $DS['nombre_cliente']."</td>   
     <td>". $DS['dni_cliente']."</td>   
     <td>". $DS['ruc']."</td>   
     <td>". $DS['monto']."</td>   
      
    <td> 
     <a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosdetallepago(".$DS['idpago'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a> 
	 </td>
     </tr>
	";
	}
	#paginar	
$NroRegistros=mysql_num_rows(mysql_query("select pa.idpago,l.nombre_local,do.nombre_documento,ds.numero_actual,pa.fecha_pago,u.nombre_usuario,c.nombre_cliente,c.dni_cliente,c.ruc,pa.monto from pago pa inner join documento_servicio ds on
pa.iddocumento_servicio=ds.iddocumento_servicio inner join documentos do on ds.iddocumentos=do.iddocumentos 
inner join usuarios u on
pa.idusuarios=u.idusuarios inner join clientes c on
pa.idcliente =c.idcliente inner join local l on
ds.idlocal=l.idlocal "));
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;
//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
if($Res>0) $PagUlt=floor($PagUlt)+1;
//desplazamiento
 echo "<tr><td colspan='9'>
<div style='margin-left: 121px;'>
<div  style=' clear:both; width:100%;'>
<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaLO('1')\">Primero</a> ";
if($PagAct>1) echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"PaginaLO('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaLO('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaLO('$PagUlt')\">Ultimo</a></div>";
echo "
<div></td></tr>            
</table>  </div>";
?>