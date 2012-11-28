<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("../func/funciones.php");
$idp = $_GET['idp'];
$cadena="select g.fecha_guia,g.idguias  from guias g 
 where g.idguias=".$idp."";
$consultafechaguia=dime($cadena);
 $fecha = mysql_fetch_array($consultafechaguia) ; 
echo"  <input type='text' name='fechaguia' size='10' maxlength='5' value='".$fecha['fecha_guia']."'  />";    
 
//echo"  <input type='text' name='fechaguia' size='10' maxlength='5' value='".$cadena."'  />";
?>
