<?php 
include("../func/funciones.php");
#resivimos las variables
$txtNombreCategoria = quitar($_POST["txtNombreCategoria"]);
$subCategria = quitar($_POST["subCategria"]); 
if($txtNombreCategoria != "" ) 
       {

$consulta = "INSERT INTO tipos_de_productos(
        nombre_tipo_producto,
		tipos_de_productos_idtipos_de_productos)  
 VALUES ('$txtNombreCategoria',
 		'$subCategria')";
$result = dime($consulta)or die(mysql_error());				 
echo "<script>document.location.href='panel.php'</script>";	}
else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 