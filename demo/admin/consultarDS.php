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
$consulta = dime("select l.nombre_local,ds.iddocumento_servicio,ds.rango1,
ds.rango2,ds.numero_actual,s.nombre_servicio,
d.nombre_documento from documento_servicio ds inner join
documentos d on 
ds.iddocumentos=d.iddocumentos inner join servicio s
on ds.idservicio=s.idservicio inner join local l on
ds.idlocal=l.idlocal where estado_ds= '1' ORDER BY iddocumento_servicio desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ")or die(ovni("consultar ser"));
echo " <h1>Documento Servicio</h1>
    <div id='myPrintArea'>
    <table width='600' border='1' class='tabla'> 
         <tr class='encabezado' >
         <td>id</td>
         <td>rango1</td>        
         <td>rango2</td>        
         <td>Numero Actual</td>        
         <td>Servicio</td>        
         <td>Documento</td>        
         <td>Local</td>        
         <td>Eli</td><td>Edi</td> </tr>";
while($DS = mysql_fetch_array($consulta)){
	echo "
<tr><td>". $DS['iddocumento_servicio']."</td>
     <td>". $DS['rango1']."</td>   
     <td>". $DS['rango2']."</td>   
     <td>". $DS['numero_actual']."</td>   
     <td>". $DS['nombre_servicio']."</td>   
     <td>". $DS['nombre_documento']."</td>   
     <td>". $DS['nombre_local']."</td>   
     <td>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarDS(".$DS['iddocumento_servicio'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a>
	 </td>
    <td> 
     <a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosDS(".$DS['iddocumento_servicio'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a> 
	 </td>
     </tr>
	";
	}
	#paginar	
$NroRegistros=mysql_num_rows(mysql_query("select l.nombre_local,ds.iddocumento_servicio,ds.rango1,
ds.rango2,ds.numero_actual,s.nombre_servicio,
d.nombre_documento from documento_servicio ds inner join
documentos d on 
ds.iddocumentos=d.iddocumentos inner join servicio s
on ds.idservicio=s.idservicio inner join local l on
ds.idlocal=l.idlocal where estado_ds= '1'"));
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
<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaDS('1')\">Primero</a> ";
if($PagAct>1) echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"PaginaDS('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaDS('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaDS('$PagUlt')\">Ultimo</a></div>";
echo "
<div></td></tr>            
</table>  </div>

";
?>