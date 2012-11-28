<?
include("../func/funciones.php");

$idc = $_POST['id'];
#para paginar
$RegistrosAMostrar=5;
//estos valores los recibo por GET enviados por aki  a un js 
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
} # para paginar
$consulta = dime("select idproveedor,nombre_proveedor,ruc_proveedor,descripcion_proveedor,telefono_proveedor  from proveedor where estado_proveedor='1' ORDER BY idproveedor desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
echo " <h1>Proveedores</h1> <div id='myPrintArea'><table width='600' border='1' class='tabla'><div class='' >	
         <tr class='encabezado' ><td>Ruc</td><td>Nombre</td> <td>Descripcion</td> <td>Telefono</td><td>Eli</td><td>Edi</td><td>Foto</td></tr>";
while($provedores = mysql_fetch_array($consulta)){
	echo "
 
        
 <tr><td>". $provedores['ruc_proveedor']."</td><td>". $provedores['nombre_proveedor']."</td><td>".$provedores['descripcion_proveedor']."</td>
     <td>".$provedores['telefono_proveedor']."</td>
            <td><a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarProveedor(".$provedores['idproveedor'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a></td>
            <td><div id='pedir'>
	<a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosProveedor(".$provedores['idproveedor'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a></div></td>
            <td> 
        
                </td></tr>
	";
	}
	#paginar	
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM proveedor  where estado_proveedor='1' "));
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;
//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
if($Res>0) $PagUlt=floor($PagUlt)+1;
//desplazamiento
echo "<tr><td colspan='6' >
<div style='margin-left: 121px;'>
<div  style=' clear:both; width:100%;'>
<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginaprove('1')\">Primero</a> ";
if($PagAct>1) echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"Paginaprove('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginaprove('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginaprove('$PagUlt')\">Ultimo</a></div>";
echo "
<div></td></tr>            
</table>  </div>
";
?>