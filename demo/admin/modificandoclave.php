<?php
include("../func/funciones.php");
$a_editar =  $_POST["idusuario"] ;
$nombre =  quitar($_POST["nombreUsuario"] );
$email =  quitar($_POST["emailUsuario"] );
$nick =  quitar($_POST["nickUsuario"]) ;
$clave = quitar($_POST["pass1"]); 
$query2="UPDATE usuarios set nombre_usuario= '$nombre',email_usuario='$email',nick_usuario='$nick',pass_usuario='$clave' where idusuarios = '$a_editar' ";
 $resultado =mysql_query($query2) or die(mysql_error());
/*if($resultado)echo "<script>document.location.href='panel.php';</script>\n";
   else   echo "Ocurrió un error !!<script>document.location.href='panel.php';</script>\n";*/  
 echo "<script>document.location.href='index.php'</script>"; 
?>
