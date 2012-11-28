<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("../func/funciones.php");
$id= $_POST["id"];
$consulta=dime("select u.idusuarios,u.pass_usuario  from usuarios u where u.pass_usuario='".$id."'");
$hey=mysql_num_rows($consulta);
if ($hey !=0) {
//echo "hola".$id;
echo " <input type='submit'   value='Guardar Cambios'>";
}else{
    echo "<spam style='color:red;'>Clave Erronea<spam>";    
}

?>
