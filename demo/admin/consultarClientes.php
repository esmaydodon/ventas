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
$consulta = dime("select c.idcliente,c.nombre_cliente,c.dni_cliente,c.nombre_comercial_cliente,
c.ruc, c.direccion_cliente, c.telefono1_cliente, c.telefono2_cliente,
c.email_cliente, c.web_cliente   from clientes c   where estado_cliente='1'
        ORDER BY idcliente desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
echo "   <h1>Clientes</h1> <div id='myPrintArea'>
    <table width='600' border='1' class='tabla'><div class='' >	
         <tr class='encabezado' >
         <td>Nombre</td>
         <td>Dni</td>
         <td>Nombre Comercial</td>
         <td>Ruc</td>
         <td>Direccion</td>
         <td>telefono1</td>
         
         <td>Email</td>
          
         <td>Eli</td><td>Edi</td> </tr>";
while($clientes = mysql_fetch_array($consulta)){
	echo "
 <tr><td>". $clientes['nombre_cliente']."</td>
     <td>". $clientes['dni_cliente']."</td>
     <td>".$clientes['nombre_comercial_cliente']."</td>
     <td>".$clientes['ruc']."</td>
     <td>".$clientes['direccion_cliente']."</td>
     <td>".$clientes['telefono1_cliente']."</td>
      
     <td>".$clientes['email_cliente']."</td>
     
     <td>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarCliente(".$clientes['idcliente'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a></td>
    <td><div id='pedir'>
     <a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosCliente(".$clientes['idcliente'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a></div></td>
     </tr>";
	}
	#paginar	
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM clientes where estado_cliente='1'"));
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
<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginacliente('1')\">Primero</a> ";
if($PagAct>1) echo "<a style='text-decoration:underline;cursor:pointer;' onclick=\"Paginacliente('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginacliente('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginacliente('$PagUlt')\">Ultimo</a></div>";
echo "
<div></td></tr>            
</table> 
            <div class='icomenu2-clientes' style='display:block;'>
                 <a  class='button mediano naranja' href=' '><span class='icomenu2-clientes-atras'>Panel</span></a>
                 
            </div>
</div>


";
?>