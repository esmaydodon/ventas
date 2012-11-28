 <?
include("../func/funciones.php");

$idc = $_POST['id'];//para naa practicamente :p
#para paginar
$RegistrosAMostrar=9;
//estos valores los recibo por GET enviados por aki  a un js 
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
} # para paginar
$consulta = dime("select  s.idservicio,s.nombre_servicio,s.numero_serie
  from servicio s where estado_servicio='1' ORDER BY idservicio desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ")or die(ovni("consultar ser"));
echo "<h1>Servicios</h1>
    <div id='myPrintArea'>
    <table width='600' border='1' class='tabla'> 
         <tr class='encabezado' >
         <td>Nombre Servicio</td>
         <td>Nª de Serie</td>        
         <td>Eli</td><td>Edi</td> </tr>";
while($guia = mysql_fetch_array($consulta)){
	echo "
<tr><td>". $guia['nombre_servicio']."</td>
     <td>". $guia['numero_serie']."</td>   
     <td>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarServicio(".$guia['idservicio'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a>
	 </td>
    <td> 
     <a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosServicio(".$guia['idservicio'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a> 
	 </td>
     </tr>
	";
	}
	#paginar	
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM servicio where estado_servicio='1'"));
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
<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginaservicio('1')\">Primero</a> ";
if($PagAct>1) echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"Paginaservicio('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginaservicio('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginaservicio('$PagUlt')\">Ultimo</a></div>";
echo "
<div></td></tr>            
</table>  </div>
";
?>