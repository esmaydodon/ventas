<?php 
session_start(); 
//con session_start() 
//creamos la sesión si  
//no existe o la retomamos 
//si ya ha sido creada 
extract($_GET); 
//Como antes, usamos 
//extract() por comodidad, 
//pero podemos no hacerlo 
//tranquilamente 
$cliente=$_SESSION['cliente']; 
$dedonde=$_GET["dedo"];
//Asignamos a la variable 
//$carro los valores 
//guardados en la sessión 
unset($cliente[md5($id)]); 
//la función unset borra 
//el elemento de un array  
//que le pasemos por 
//parámetro. En este caso 
//la usamos para borrar el 
//elemento cuyo id le pasemos 
//a la página por la url  
$_SESSION['cliente']=$cliente; 
//Finalmente, actualizamos 
//la sessión, como hicimos 
//cuando agregamos un producto 
//y volvemos al catálogo 
if (!isset($dedonde)) {
    header("Location:catalogo.php?".SID); 
}else{
    header("Location:vender.php?".SID);  
}
?>