<?php 
include("../func/funciones.php");
#resivimos las variables
$nombreusuario= quitar($_POST["nombreusuario"]);
$dniusuario= quitar($_POST["dniusuario"]);
$sexousuario = quitar($_POST["sexousuario"]);
$nickusuario= quitar($_POST['nickusuario']);
$passusuario= quitar($_POST['passusuario']);
$emailusuario= quitar($_POST['emailusuario']);
$telefonousuario= quitar($_POST['telefonousuario']);
$celularusuario= quitar($_POST['celularusuario']);
$direccionusuario= quitar($_POST['direccionusuario']);
$tipousuario= quitar($_POST['tipousuario']);

if($nombreusuario != "" && $dniusuario!= "" && $sexousuario!= "0"
         && $nickusuario != "" && $passusuario!= "" && $emailusuario!= ""
         && $telefonousuario != "" && $celularusuario!= "" && $direccionusuario!= ""
         && $tipousuario != "0") 
       { 
 
$consulta = "INSERT INTO usuarios(nombre_usuario,
dni_suario,sexo,nick_usuario,pass_usuario,email_usuario,
telefono_usuario,celular_usuario,direccion_usuario,
tipos_usuarios_idtipos_usuarios
)  
 VALUES ('$nombreusuario',
 '$dniusuario',
 '$sexousuario',
 '$nickusuario',
 '$passusuario',
 '$emailusuario',
 '$telefonousuario',
 '$celularusuario',
 '$direccionusuario',
 '$tipousuario')";
$result = dime($consulta)or die(ovni("registrandoUsuario.php")); 
echo "<script>document.location.href='ventas.php'</script>";

}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}
?> 