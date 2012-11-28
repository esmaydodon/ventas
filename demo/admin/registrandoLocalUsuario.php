<?php 
include("../func/funciones.php");
#resivimos las variables
$usuarios= quitar($_POST["usuario"]);
$local= quitar($_POST["local"]);

if($usuarios != "0" && $local!= "0") 
       { 
    $consulta = "INSERT INTO usuarios_local(idusuarios,
idlocal)  
 VALUES ('$usuarios','$local')";
$result = dime($consulta)or die(ovni("registrandoUsuarioLOCAL.php")); 
echo "<script>document.location.href='panel.php'</script>";
 }else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 