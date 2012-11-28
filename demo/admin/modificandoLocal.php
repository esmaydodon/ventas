<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idTP = quitar($_POST["idlocal"]); 
$nombre_local = $_POST["nombre_local"];
$ciudad_local = $_POST["ciudad_local"];
$departamento_local = $_POST["departamento_local"];
$direccion_local = $_POST["direccion_local"];
$telefono_local = $_POST["telefono_local"];
//validar
if ($nombre_local!=""&&$direccion_local!="") {
$consulta = dime("UPDATE local SET nombre_local='$nombre_local',
        ciudad_local='$ciudad_local',departamento_local='$departamento_local'
        ,direccion_local='$direccion_local'   
        ,telefono_local='$telefono_local'   
	 where idlocal ='$idTP'")or die (ovni("modificandoLO.php"));;
 header("Location:panel.php");
 }else{
    echo "ingrese Nombre y Direccion Como minimo";
}
//validar end
?>

