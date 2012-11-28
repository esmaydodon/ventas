<?
 
session_start();// las variables de sesion permanecen en el sistema como  seguridad antes de destruir hacemos una asignacion de nulo  a el array session (php 4)
$_SESSION[] = array();
session_destroy();//estoy entendiendo quela seion se puedo terminar (php5) con esto basta
 
header("Location:ventas.php?".SID); 
?>