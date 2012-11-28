<?
include("../func/funciones.php");
include('login.php');
$idc = $_POST['id'];
#para paginar
$RegistrosAMostrar=15;
//estos valores los recibo por GET enviados por aki  a un js 
if(isset($_GET['pag'])){
	$RegistrosAEmpezar=($_GET['pag']-1)*$RegistrosAMostrar;
	$PagAct=$_GET['pag'];
//caso contrario los iniciamos
}else{
	$RegistrosAEmpezar=0;
	$PagAct=1;
} # para paginar
$consulta = dime("select p.codigo_producto,p.descripcion_producto,p.Cantidad_producto,g.fecha_guia,p.fecha_caducidad_pro,p.precio,p.ruta_img1  from productos p inner join 
guias g on p.guias_idguias = g.idguias
order by fecha_caducidad_pro desc LIMIT $RegistrosAEmpezar, $RegistrosAMostrar  ");
echo "
<div id='myPrintArea'> <table width='600' border='1' class='tabla' id='Exportar_a_Excel' > 	
        <tr class='encabezado' ><td>codigo</td><td>Descripcion</td> <td>Cantidad</td><td>fecha Ingreso</td><td>fecha fin</td></td><td>Limite</td><td>Imagen</td></tr>";
while($productos = mysql_fetch_array($consulta)){
    #para fecha
    $fecha_fin = strtotime($productos['fecha_caducidad_pro']);
    $fecha_final=strtotime("-3 days", $fecha_fin);
$quedan_dias=ceil(($fecha_fin-time())/86400);
switch($quedan_dias){
  case 0:
    $dias="<div> hoy</div>";
    $color="style ='background-color: crimson;'"; 
    #si vencen hoy entonces mandar la lista de los que an vencido#
    break;
  case 1:
    $dias=" <div> manana</div>  ";
      $color="style ='background-color: darkorange;'";
      #si vencen hoy entonces mandar la lista de los que an vencido#
    break;
case 2:
    $dias=" <div style =' '> pasado manana</div>  ";
     $color="style ='background-color: darkKhaki;'";
    break;
case 3:
    $dias=" <div > Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    break;
case 4:
    $dias=" <div> Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    break;
case 5:
    $dias=" <div style =''> Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    break;
case 6:
    $dias=" <div style =''> Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    break;
case 7:
    $dias=" <div style =''> Esta por vencer</div>  ";
    $color="style ='background-color: darkKhaki;'";
    break;
#si vencen hoy entonces mandar la lista de los que an vencido#
  default:
    
    if ($quedan_dias < 0) {
      $dias ="<div>an pasado ".$quedan_dias." dias</div>";   
      $color="style ='background-color: maroon;'"; 
    }  else {
        $dias="dentro de ".$quedan_dias." dias";
        $color="style ='background-color: chartreuse;'";
    }
      
}
    #para fecha  - end 
 ##########cuerpo del mensaje ###############################
	$cadena = ereg_replace( "([     ]+)","%20",$productos['ruta_img1']);
	echo "
        <tr ".$color." ><td>". $productos['codigo_producto']."</td><td>". $productos['descripcion_producto']."</td><td>".$productos['Cantidad_producto']."</td>
            <td> ". $productos['fecha_guia']."</td>
            <td>". $productos['fecha_caducidad_pro']." </td>
               <td>".$dias."</td> 
            <td> 
        <a class='zoom' href=".$cadena." style='cursor:pointer; ' >
            <!--<img  src=".$cadena." width='64px' height='64px >--> <img src='../imagenes/camera32.png' width='16' height='16'> </a>
                </td></tr>";
  
	}
       #paginar	
$NroRegistros=mysql_num_rows(mysql_query("select p.codigo_producto,p.descripcion_producto,p.Cantidad_producto,g.fecha_guia,p.fecha_caducidad_pro,p.precio,p.ruta_img1  from productos p inner join 
guias g on p.guias_idguias = g.idguias"));
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
<a style=' float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginafecha('1')\">Primero</a> ";
 if($PagAct>1) echo "<a style=' float: left; text-decoration:underline;cursor:pointer;' onclick=\"Paginafecha('$PagAnt')\">Anterior</a> ";
echo "<spam style='float:left;'><strong>Paginafecha ".$PagAct."/".$PagUlt."</strong></spam>";
if($PagAct<$PagUlt)  echo " <a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginafecha('$PagSig')\">Siguiente</a> ";
echo "<a style='float:left;text-decoration:underline;cursor:pointer;' onclick=\"Paginafecha('$PagUlt')\">Ultimo</a></div>";       
        echo "
<div></td></tr>            
</table> </div>";
 
echo date("d-m-Y H:i:s");
// exportar a exel
echo "<form action='cficheroExcel.php' method='post' target='_blank' id='FormularioExportacion'>
<p>Exportar a Excel  <img src='imagenes/panel/export_to_excel.gif' class='botonExcel' /></p>
<input type='hidden' id='datos_a_enviar' name='datos_a_enviar' />
</form>";
// exportar a exel end
//iomprimir
 
//iomprimir end

##########cuerpo del mensaje ############################### end 

/*
 include("../func/funciones.php");
$consulta=mysql_query("select p.codigo_producto,p.descripcion_producto,p.Cantidad_producto,g.fecha_guia,p.fecha_caducidad_pro  from productos p inner join 
guias g on p.guias_idguias = g.idguias
order by fecha_caducidad_pro desc; ");
while ($row = mysql_fetch_array($consulta)) {
    //para fecha
$fecha_inicio = strtotime($row['fecha_guia']);
$fecha_fin = strtotime($row['fecha_caducidad_pro']);
//$dateToMySQL = date("Y-m-d",$fecha_inicio); // Formato de Date en mysql es: aaaa-mm-dd
//para fecha end
 
$fecha_final=strtotime("-3 days", $fecha_fin);
$quedan_dias=ceil(($fecha_fin-time())/86400);
switch($quedan_dias){
  case 0:
    $dias="hoy";
    break;
  case 1:
    $dias="  manana  ";
    break;
  default:
    $dias="dentro de ".$quedan_dias." dias";
}
echo "<div><b>".$row['codigo_producto']."</b> comenzo el".date("Y-m-d", $fecha_inicio).
                "finaliza ".$dias."el>".date("Y-m-d",strtotime($row['fecha_caducidad_pro']))."<br></div><br>";

}
 */ 
?>