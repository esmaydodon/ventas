 Busquedas Relacionadas
  <form method="POST" id="searchform" action="buscarProductos.php">
                          <fieldset class="search">
                            <input type="text" class="box" name="buscar" />
                            <button class="btn" title="Submit Search">Search</button>
                          </fieldset>
    </form><br />
    <?
include '../func/funciones.php';
$enter = (isset ( $_POST ["buscar"] )) ? true : false;
 if ($enter){ 
 $busqueda = $_POST["buscar"];
if ($busqueda<>''){
$trozos=explode(" ",$busqueda);
$numero=count($trozos);
$cadbusca="SELECT P.idproductos,P.codigo_producto,P.descripcion_producto,unidad_medida,tipos_de_productos_idtipos_de_productos,precio,precio_x_metro,precio_mayorista from productos P  where  P.codigo_producto LIKE '%$busqueda%'";//LIMIT 50
$result=dime($cadbusca)or die(mysql_error());
}
?>
  
                        <div class="break2"></div>
       <h1>Resultados de la busqueda</h1>                  
<?php 
}?>
    
