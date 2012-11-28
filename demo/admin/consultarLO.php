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
$consulta = dime("select * from local where estado_local='1' ORDER BY idlocal desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ")or die(ovni("consultar lOCAL"));
echo "  <h1>Local</h1>  <div id='myPrintArea'>
    <table width='600' border='1' class='tabla'> 
         <tr class='encabezado' >
         <td>ID</td>
         <td>Nombre Local</td>        
         <td>Departamento</td>        
         <td>Ciudad</td>        
         <td>Direccion Local</td>        
         <td>Telefono Local</td>        
         <td>Eli</td><td>Edi</td> </tr>";
while($DS = mysql_fetch_array($consulta)){
	echo "
<tr><td>". $DS['idlocal']."</td>
     <td>". $DS['nombre_local']."</td>   
     <td>". $DS['departamento_local']."</td>   
     <td>". $DS['ciudad_local']."</td>   
     <td>". $DS['direccion_local']."</td>   
     <td>". $DS['telefono_local']."</td>   
     <td>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarLO(".$DS['idlocal'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a>
	 </td>
    <td> 
     <a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosLO(".$DS['idlocal'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a> 
	 </td>
     </tr>
	";
	}
	#paginar	
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM local where estado_local='1' "));
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