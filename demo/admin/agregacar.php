<?php  
session_start(); 
//con session_start() creamos la sesión 
//si no existe o la retomamos si ya ha 
//sido creada 
extract($_REQUEST); 
//la función extract toma las claves 
//de una matriz asoiativa y las 
//convierte en nombres de variable, 
//asignándoles a esas variables 
//valores iguales a los que tenía 
//asociados en la matriz. Es decir, 
//convierte a $_GET['id'] en $id, 
//sin que tengamos que tomarnos el 
//trabajo de escribir 
//$id=$_GET['id'];
#modificado x  www.kuraka.net  -  mmq   
include("../func/funciones.php");
$dedonde=$_POST["dedoc"];

//incluímos la conexión a nuestra 
//base de datos 
if(!isset($cantidad)){$cantidad=1;} 
if(!isset($pre)){$pre=$precio2;
//$actualizar= mysql_query("UPDATE productos SET preciovi='$pre' WHERE    idproductos='".$id."'"); 
//$mensaje="UPDATE productos SET preciovi='$pre' WHERE    idproductos='".$id."'";
} 
//Como también vamos a usar este 
//archivo para actualizar las 
//cantidades, hacemos que cuando 
//la misma no esté indicada sea 
//igual a 1 
//PARA EL CHECKBOX
if(!empty($_POST['seleccion'])) {
    if(isset($_SESSION['carro'])) 
$carro=$_SESSION['carro'];
    
foreach ($_POST['seleccion'] as $id){
  $qry2=dime("select * from productos where  idproductos='".$id."'"); 
$row2=mysql_fetch_array($qry2); 
 
   $carro[md5($id)]=array('identificador'=>md5($id), 
                        'idproductos'=>$id,
						'cantidad'=>$cantidad,
						'idproductos'=>$id,
                                                 'pre'=>$pre,
						'stock'=>$row2['Cantidad_producto'],
						'descripcion_producto'=>$row2['descripcion_producto'], 
						'precio'=>$row2['precio']
						);
}
$_SESSION['carro']=$carro; 
 
    header("Location:vender.php?".SID);  
 
}else{
//PARA EL CHECKBOX END
$qry=dime("select * from productos where  idproductos='".$id."'"); 
$row=mysql_fetch_array($qry); 
//para la Unidad de Medida
$unidadM=dime("select p.idproductos,um.nombre_unidad_medida 
from productos p inner join unidad_de_medidas um on
p.unidad_medida=um.idunidad_de_medidas 
where  idproductos='".$id."'");
$rowUnidadM=mysql_fetch_array($unidadM);
//para unidad de medida End
//Si ya hemos introducido algún 
//producto en el carro lo 
//tendremos guardado temporalmente 
//en el array superglobal 
//$_SESSION['carro'], de manera 
//que rescatamos los valores de 
//dicho array y se los asignamos 
//a la variable $carro, previa  
//comprobación con isset de que 
//$_SESSION['carro'] ya haya sido 
//definida 
if(isset($_SESSION['carro'])) 
$carro=$_SESSION['carro']; 
//Ahora introducimos el nuevo 
//producto en la matriz $carro, 
//utilizando como índice el id 
//del producto en cuestión, 
//encriptado con md5. 
//Utilizamos md5 porque genera 
//un valor alfanumérico que luego, 
//cuando busquemos un producto 
//en particular dentro de la 
//matriz, no podrá ser confundido 
//con la posición que ocupa dentro 
//de dicha matriz, como podría 
//ocurrir si fuera sólo numérico. 
//Cabe aclarar que si el producto 
//ya había sido agregado antes, 
//los nuevos valores que le 
//asignemos reemplazarán a los 
//viejos.  
//Al mismo tiempo, y no porque 
//sea estrictamente necesario 
//sino a modo de ejemplo, 
//guardamos más de un valor en 
//la variable $carro, valiéndonos 
//de nuevo de la herramienta array. 
#agregamos los valores al array de session Oo
$carro[md5($id)]=array('identificador'=>md5($id), 
                        'idproductos'=>$id,
						'cantidad'=>$cantidad,
						'idproductos'=>$id,
						'stock'=>$row['Cantidad_producto'],
						'Um'=>$rowUnidadM['nombre_unidad_medida'],
                                                'pre'=>$pre,
						'descripcion_producto'=>$row['descripcion_producto'], 
						'precio'=>$row['precio']
						); 
//Ahora dentro de la sesión 
//($_SESSION['carro']) tenemos 
//sólo los valores que teníamos 
//(si es que teníamos alguno)  
//antes de ingresar a esta página 
//y en la variable $carro tenemos 
//esos mismos valores más el que 
//acabamos de sumar. De manera que  
//tenemos que actualizar (reemplazar) 
//la variable de sesión por la 
//variable $carro. 
$_SESSION['carro']=$carro; 
//Y volvemos a nuestro catálogo de 
//artículos. La cadena SID representa 
//al identificador de la sesión, que, 
//dependiendo de la configuración del 
//servidor y de si el usuario tiene 
//o no activadas las cookies puede 
//no ser necesario pasarla por la url. 
//Pero para que nuestro carro funcione, 
//independientemente de esos factores, 
//conviene escribirla siempre. 
if (!isset($dedonde)) {
    header("Location:catalogo.php?".SID); 
}elseif ($dedonde=="VendiendoVidrio") {
        header("Location:ventaVidrio.php?".SID);  
    }elseif ($dedonde=="1") {
    header("Location:vender.php?".SID);    
    }
    else{
    header("Location:vender.php?".SID);  
}

}

?> 