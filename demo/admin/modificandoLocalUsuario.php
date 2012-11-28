<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idTP = quitar($_POST["idusuario"]); 
$nombre_local = $_POST["local"];
//validar
if ($nombre_local!="0") {
$consulta = dime("UPDATE usuarios_local SET idlocal='$nombre_local'
	 where idusuarios ='$idTP'")or die (ovni("modificandousLO.php"));;
 header("Location:panel.php");
 }else{
    echo "seleccione local";
}
//validar end
?>

