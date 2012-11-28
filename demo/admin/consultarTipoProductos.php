<?
include("../func/funciones.php");

$idc = $_POST['id'];
#para paginar
$RegistrosAMostrar=8;
//estos valores los recibo por GET enviados por aki  a un js 
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
} # para paginar
$consulta = dime("select idtipos_de_productos,nombre_tipo_producto,tipos_de_productos_idtipos_de_productos   from tipos_de_productos where estado_tipo_producto='1'
 ORDER BY idtipos_de_productos desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
echo "<h1>Categorias</h1><table width='600' border='1' class='tabla'><div class='' >	
        <tr class='encabezado' ><td>Sub Categoria</td><td>Categoria</td> <td>Eli</td><td>Edi</td></tr>";
while($productos = mysql_fetch_array($consulta)){
	#para padre
		$consulata_padre=dime("select nombre_tipo_producto from tipos_de_productos  where estado_tipo_producto='1' and  idtipos_de_productos = ".$productos['tipos_de_productos_idtipos_de_productos']."");
		while($tipoPropadre=mysql_fetch_array($consulata_padre)){
    	$padre = $tipoPropadre['nombre_tipo_producto'];}
 
 
	echo "<tr><td>". $productos['nombre_tipo_producto'].
	"</td><td>". $padre."</td>
        <td><a  style='cursor:pointer; ' onclick='eliminarTipoProducto(".$productos['idtipos_de_productos'].")'>
	<img src='../imagenes/remove.png' width='16' height='16'></a> </td>
	 <td>
	<a  style='cursor:pointer; ' onclick='pedirDatosTipoProducto(".$productos['idtipos_de_productos'].")'>
	<img src='../imagenes/application_edit.png' width='16' height='16'></a></td> 
<tr> ";}
#paginar	
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM tipos_de_productos where estado_tipo_producto='1'"));
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;
//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
if($Res>0) $PagUlt=floor($PagUlt)+1;	
//desplazamiento
echo"
<tr><td colspan='6' ><div style='margin-left: 121px;'>
<div  style=' clear:both; width:100%;'>
<a style=' float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaTipoProducto('1')\">Primero</a> ";
 if($PagAct>1) echo "<a style=' float: left; text-decoration:underline;cursor:pointer;' onclick=\"PaginaTipoProducto('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaTipoProducto('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaTipoProducto('$PagUlt')\">Ultimo</a></div>";       
        echo "
<div></td></tr>            
</table>";
?>