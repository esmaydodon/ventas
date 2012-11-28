<?php // content="text/plain; charset=utf-8"
include("../func/funciones.php");

include ("jpgraph/jpgraph.php"); 
include ("jpgraph/jpgraph_pie.php"); 
include ("jpgraph/jpgraph_pie3d.php"); 
$fechainis=$_GET['f1'];
$fechafins=$_GET['f2'];

 $consultaProductos = dime(" select tp.idtipos_de_productos,pa.fecha_pago,tp.nombre_tipo_producto,sum(dp.cantidad_pago) as cantidad_pago 
 from detalle_de_pago dp  
inner join productos p on 
dp.idproductos=p.idproductos inner join pago pa on
dp.idpago=pa.idpago inner join tipos_de_productos tp on
p.tipos_de_productos_idtipos_de_productos=tp.idtipos_de_productos
where 
pa.fecha_pago BETWEEN '$fechainis' AND '$fechafins' group by tp.idtipos_de_productos ")or die(ovni("consultar detalle de PAGOS"));
/* $consultaProductos = dime("select p.descripcion_producto,dp.cantidad_pago  from detalle_de_pago dp  
inner join productos p on 
dp.idproductos=p.idproductos where dp.idpago=15 order by  dp.iddetalle_de_pago asc;")or die(ovni("consultar detalle de PAGOS"));
 */
 
        $nombres=array();$array=array();
   while($res2=mysql_fetch_array($consultaProductos)){
    $nombres[]=$res2['nombre_tipo_producto'];
    $array[]=$res2['cantidad_pago'];
  }     
//

$graph = new PieGraph(450,450,"auto"); 
$graph->img->SetAntiAliasing(); 
$graph->SetMarginColor('gray'); 
//$graph->SetShadow(); 

// Setup margin and titles 
$graph->title->Set("Productos Mas Comprados"); 

$p1 = new PiePlot3D($array); 
$p1->SetSize(0.35); 
$p1->SetCenter(0.5); 

// Setup slice labels and move them into the plot 
$p1->value->SetFont(FF_FONT1,FS_BOLD); 
$p1->value->SetColor("black"); 
$p1->SetLabelPos(0.2); 

//$nombres=array("pepe","luis","miguel","alberto"); 
$p1->SetLegends($nombres); 

// Explode all slices 
$p1->ExplodeAll(); 

$graph->Add($p1); 
$graph->Stroke(); 
echo $fechainis.$fechafins ;
?>

