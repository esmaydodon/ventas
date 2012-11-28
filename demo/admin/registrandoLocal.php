<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");

$nombre_local = $_POST["nombre_local"];
$ciudad_local = $_POST["ciudad_local"];
$departamento_local = $_POST["departamento_local"];
$direccion_local = $_POST["direccion_local"];
$telefono_local = $_POST["telefono_local"];
//validar
 if($nombre_local != "" && $ciudad_local != "" && $departamento_local != "" && $direccion_local != ""
        && $telefono_local!= "") 
       { 

$consulta = "INSERT INTO local(nombre_local,
ciudad_local,departamento_local,direccion_local,telefono_local)  
 VALUES ('$nombre_local',
 '$ciudad_local','$departamento_local','$direccion_local','$telefono_local')";
$result = dime($consulta)or die(ovni("registrandoTU.php")); 
echo "<script>document.location.href='panel.php'</script>";    

}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";} 
//validar end

?>
