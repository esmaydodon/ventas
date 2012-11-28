<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Imagen</title>
</head>
<body>

<FORM METHOD=POST ACTION="buscar_ahora.php">
    <p >Buscar Contacto<br><INPUT TYPE="text" NAME="buscar"> 
    <input type="submit" name="buscar2" id="buscar3" value="Buscar" />
</p></FORM>
<?php
//cadena de conexion
 $enter = (isset ( $_POST ["buscar"] )) ? true : false;
 if ($enter){ 
include("../func/funciones.php");
include('login.php');
 $busqueda = $_POST["buscar"];
if ($busqueda<>''){
//CUENTA EL NUMERO DE PALABRAS
$trozos=explode(" ",$busqueda);
$numero=count($trozos);
//SI SOLO HAY UNA PALABRA DE BUSQUEDA SE ESTABLECE UNA INSTRUCION CON LIKE
/*$cadbusca="SELECT A.nombre_con, A.numeros_con,A.email_con,A.direccion_con, AG.idagenda FROM amigos A inner join
agenda_has_amigos AM on
A.idamigos =AM.amigos_idamigos  inner join agenda AG on
AM.agenda_idagenda = AG.idagenda
WHERE AG.idagenda = $idUsuarioL and nombre_con LIKE '%$busqueda%' OR numeros_con LIKE '%$busqueda%'  ";*/
$cadbusca="SELECT nombre_producto,descripcion_producto,precio FROM productos WHERE  nombre_producto LIKE '%$busqueda%' OR descripcion_producto LIKE '%$busqueda%'";
$result=mysql_query ($cadbusca)or die(mysql_error());
While($row=mysql_fetch_object($result))
{
//Mostramos los titulos de los articulos o lo que deseemos.....
$nombre_pro=$row->nombre_producto ;
$des_pro=$row->descripcion_producto;
$pre_pro=$row->precio; 
echo "<div style='color: #FFF;' ><b>".$nombre_pro."</b><br>";
echo "descripcion:".$des_pro."<br>";
echo "precio:".$pre_pro."<br></div>";
}
}
 }
?>
</body>
</html>