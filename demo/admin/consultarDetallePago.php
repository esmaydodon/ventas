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
$consulta = dime("select dp.idpago,p.descripcion_producto,dp.cantidad_pago,
dp.montounitario_pago,dp.monto_pago from detalle_de_pago dp  
inner join productos p on 
dp.idproductos=p.idproductos where dp.idpago=$idc")or die(ovni("consultar detalle de PAGOS"));
echo "  <div id='myPrintArea'>
    <table width='650' border='1' class='tabla'> 
         <tr class='encabezado' >
         <td>ID Pago</td>
         <td>Producto</td>        
         <td>Numero</td>        
         <td>Monto Unitario</td>        
         <td>Monto de Pago</td> </tr>";
while($DS = mysql_fetch_array($consulta)){
	echo "
<tr><td>". $DS['idpago']."</td>
     <td>". $DS['descripcion_producto']."</td>   
     <td>". $DS['cantidad_pago']."</td>      
     <td>". $DS['montounitario_pago']."</td>   
     <td>". $DS['monto_pago']."</td>   
     <td> 
      - 
	 </td>
     </tr>
	";
	}
	#paginar	
$NroRegistros=0;
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;
//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
if($Res>0) $PagUlt=floor($PagUlt)+1;
//desplazamiento
 echo "            
</table>  </div>";
?>