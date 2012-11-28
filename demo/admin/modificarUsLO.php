<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
include("../func/funciones.php");$idc = $_POST['id'];
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<?
$consulta = dime(" select u.idusuarios,u.nombre_usuario,l.nombre_local  from usuarios u inner join usuarios_local ul on
  u.idusuarios=ul.idusuarios inner join local l on 
  ul.idlocal=l.idlocal   where u.idusuarios = '".mysql_escape_string($idc)."'");
while($DS = mysql_fetch_array($consulta)){
$html=" 
   <form action='modificandoLocalUsuario.php' method='post' enctype='multipart/form-data'  class='contacto'>
<input type='hidden' name='idusuario' value='".$DS['idusuarios']."'>
 <select name='local'>
<option value='". $DS['idlocal']."'>". $DS['nombre_local']."</option>";
$consultaTU=dime("select *  from  local ");
while ($row = mysql_fetch_array($consultaTU)) {
    $html.="<option value='". $row['idlocal']."'>". $row['nombre_local']."</option>";
}
$html.="
</select>
  <input type='submit' value='Registrar' />
</form>  ";	
	};
	echo $html;
	
 
?>

</body>
</html>