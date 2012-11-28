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
$consulta = dime("select u.idusuarios,u.nombre_usuario,l.nombre_local  from usuarios u inner join usuarios_local ul on
  u.idusuarios=ul.idusuarios inner join local l on 
  ul.idlocal=l.idlocal where ul.estado_us_local ='1' ORDER BY u.idusuarios desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ")or die(ovni("consultar USUARIO lOCAL"));
echo " <h1>Listar Usuario Personal</h1> <div id='myPrintArea'>
    <table width='600' border='1' class='tabla'> 
         <tr class='encabezado' >
         <td>ID</td>
         <td>Nombre Usuario</td>        
         <td>Nombre local</td>               
         <td>Eli</td><td>Edi</td> </tr>";
while($DS = mysql_fetch_array($consulta)){
	echo "
<tr><td>". $DS['idusuarios']."</td>
     <td>". $DS['nombre_usuario']."</td>   
     <td>". $DS['nombre_local']."</td>   
     <td>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarUsLo(".$DS['idusuarios'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a>
	 </td>
    <td> 
     <a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosUsLo(".$DS['idusuarios'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a> 
	 </td>
     </tr>
	";
	}
	#paginar	
$NroRegistros=mysql_num_rows(mysql_query("select u.idusuarios,u.nombre_usuario,l.nombre_local  from usuarios u inner join usuarios_local ul on
  u.idusuarios=ul.idusuarios inner join local l on 
  ul.idlocal=l.idlocal"));
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
<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaUsLO('1')\">Primero</a> ";
if($PagAct>1) echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"PaginaUsLO('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaUsLO('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaUsLO('$PagUlt')\">Ultimo</a></div>";
echo "
<div></td></tr>            
</table>  </div>";
?>