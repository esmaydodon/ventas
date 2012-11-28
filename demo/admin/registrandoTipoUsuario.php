<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$nombre_tipo_usuario = $_POST["nombre_tipo_usuario"];
$observacion_tipo_usuario = $_POST["observacion_tipo_usuario"];
if($nombre_tipo_usuario != "" && $observacion_tipo_usuario != "" ) 
       {  $consulta = "INSERT INTO tipos_usuarios(nombre_tipo_usuario,
observacion_tipo_usuario)  
 VALUES ('$nombre_tipo_usuario',
 '$observacion_tipo_usuario')";
$result = dime($consulta)or die(ovni("registrandoTU.php")); 
echo "<script>document.location.href='panel.php'</script>";
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}?>
