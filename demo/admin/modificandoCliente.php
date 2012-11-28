<?
//$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
include("../func/funciones.php");
$idcliente = $_POST["idcliente"];
$nombre = quitar($_POST["nombre"]);
$dni = quitar($_POST["dni"]);
$nombrecomercial = quitar($_POST["nombrecomercial"]);
$ruc = quitar($_POST["ruc"]);
$direccion = quitar($_POST["direccion"]);
$telefono1 = quitar($_POST["telefono1"]);
$telefono2 = quitar($_POST["telefono2"]);
$email = quitar($_POST["email"]);
$web = quitar($_POST["web"]);

$consulta = dime("UPDATE clientes SET   
	nombre_cliente ='$nombre',
	dni_cliente  ='$dni',
	nombre_comercial_cliente ='$nombrecomercial', 
	ruc ='$ruc', 
	direccion_cliente ='$direccion', 
	telefono1_cliente ='$telefono1', 
	telefono2_cliente ='$telefono2', 
	email_cliente ='$email', 
	web_cliente ='$web' 
	WHERE idcliente ='$idcliente' ") or die (ovni("modificandoClientes.php"));
		echo "UPDATE clientes SET   
	nombre_cliente ='$nombre',
	dni_cliente  ='$dni',
	nombre_comercial_cliente ='$nombrecomercial', 
	ruc ='$ruc', 
	direccion_cliente ='$direccion', 
	telefono1_cliente ='$telefono1', 
	telefono2_cliente ='$telefono2', 
	email_cliente ='$email', 
	web_cliente ='$web' 
	WHERE idcliente ='$idcliente' ";	   
 echo "<script>document.location.href='panel.php'</script>"; 
?>
