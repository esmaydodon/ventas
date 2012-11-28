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
} # para paginar<div class='section'>
$consulta = dime("select idproductos,descripcion_producto,codigo_producto,precio,Cantidad_producto,ruta_img1  from productos where estado_producto= '1'  ORDER BY idproductos desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
echo " <h1>Productos</h1> <div id='section'><table width='600' border='1' class='tabla'><div class='' >	
         <tr class='encabezado' ><td>codigo</td><td>Descripcion</td> <td>precio</td><td>Cantidad</td><td>Eli</td><td>Edi</td><td>Foto</td></tr>";
while($productos = mysql_fetch_array($consulta)){
    if ($productos['Cantidad_producto'] <="5" ) {
        $color="style='background-color:red;'";
    }  else {
    $color="style='background-color:#fff;'";    
    }
	$cadena = ereg_replace( "([     ]+)","%20",$productos['ruta_img1']);
	echo "
	
        <tr $color><td>". $productos['codigo_producto']."</td>
            <td>". $productos['descripcion_producto']."</td>
                <td>".$productos['precio']."</td>
                <td >".$productos['Cantidad_producto']."</td>
            <td><a  style='cursor:pointer; text-decoration:underline;' onclick='eliminarProducto(".$productos['idproductos'].")'>    <img src='../imagenes/remove.png' width='16' height='16'></a></td>
            <td><div id='pedir'>
	<a  style='cursor:pointer; text-decoration:underline;' onclick='pedirDatosProducto(".$productos['idproductos'].  ")'><img src='../imagenes/application_edit.png' width='16' height='16'></a></div></td>
            <td> 
        <a class='zoom' href=".$cadena." style='cursor:pointer; ' >
            <!--<img  src=".$cadena." width='64px' height='64px >--> <img src='../imagenes/camera32.png' width='16' height='16'> </a>
                </td></tr>
	";
  
	}
       #paginar	
$NroRegistros=mysql_num_rows(mysql_query("SELECT * FROM productos where estado_producto= '1' "));
$PagAnt=$PagAct-1;
$PagSig=$PagAct+1;
$PagUlt=$NroRegistros/$RegistrosAMostrar;
//verificamos residuo para ver si llevará decimales
$Res=$NroRegistros%$RegistrosAMostrar;
if($Res>0) $PagUlt=floor($PagUlt)+1;
//desplazamiento
        echo"
<tr><td colspan='6' >
<div style='margin-left: 121px;'>
<div  style=' clear:both; width:100%;'>
<a style=' float:left;text-decoration:underline;cursor:pointer;' onclick=\"Pagina('1')\">Primero</a> ";
 if($PagAct>1) echo "<a style=' float: left; text-decoration:underline;cursor:pointer;' onclick=\"Pagina('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Pagina ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Pagina('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Pagina('$PagUlt')\">Ultimo</a></div>";       
        echo "
<div></td></tr>            
</table>  </div>

";
echo "<a href='reporteproductos.php'   title='Reporte  ' target='_blank'  >
<img src=' ' alt=' ' />Reporte Productos</a>
";


 
?>