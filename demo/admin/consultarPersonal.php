<?
include("../func/funciones.php");

$idc = $_POST['id'];
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
$consulta = dime("select u.*,tu.idtipos_usuarios,tu.nombre_tipo_usuario 
from usuarios u inner join tipos_usuarios tu on
 u.tipos_usuarios_idtipos_usuarios=tu.idtipos_usuarios   where estado_usuario='1'
        ORDER BY u.idusuarios desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
echo "  <h1>Personal</h1><div id='myPrintArea'>
    <table width='600' border='1' class='tabla'><div class='' >	
         <tr class='encabezado' >
         <td>Nombre</td>
         <td>Dni</td>
         <td>sexo</td>
         <td>Nick</td>
         <td>Email</td>
         <td>Telefono</td>
         <td>Celular</td>
         <td>Direccion</td>
         <td>Cargo</td>
         <td>Eli</td><td>Edi</td> </tr>";
while($personal = mysql_fetch_array($consulta)){
	echo "
 <tr><td>". $personal['nombre_usuario']."</td>
     <td>". $personal['dni_suario']."</td>
     <td>".$personal['sexo']."</td>
     <td>".$personal['nick_usuario']."</td>
     <td>".$personal['email_usuario']."</td>
     <td>".$personal['telefono_usuario']."</td>
     <td>".$personal['celular_usuario']."</td>
     <td>".$personal['direccion_usuario']."</td>
     <td>".$personal['nombre_tipo_usuario']."</td>
     
     <td>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarUsuario(".$personal['idusuarios'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a></td>
    <td><div id='pedir'>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosUsuario(".$personal['idusuarios'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a></div></td>
     </tr>";
	}
	#paginar	
$NroRegistros=mysql_num_rows(mysql_query("select u.*,tu.idtipos_usuarios,tu.nombre_tipo_usuario 
from usuarios u inner join tipos_usuarios tu on
 u.tipos_usuarios_idtipos_usuarios=tu.idtipos_usuarios where estado_usuario='1'"));
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
<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaUsuario('1')\">Primero</a> ";
if($PagAct>1) echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"PaginaUsuario('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaUsuario('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"PaginaUsuario('$PagUlt')\">Ultimo</a></div>";
echo "
<div></td></tr>            
</table>  </div>
";
?>