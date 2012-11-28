<?
ob_start("ob_gzhandler"); 
session_start();
$carro=$_SESSION['carro']; 
/*
 * 27/11/2012
 * la historia de tu codigo es un libro tuyo... fack !!! tioo jaaa
 */

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- aqui pondremos el contenido html -->
    <script type="text/javascript" >
        /*para calcular los pies ala hora de vender */
function pies(){
      interval = setInterval("calcular()",1);
}
function calcular(){
      uno = document.autoSumForm1.ancho.value;
      dos = document.autoSumForm1.alto.value; 
      document.autoSumForm1.resultado.value = (uno * dos)/900;
}
function NoSumar(){
      clearInterval(interval);
}
/*para calcular los pies ala hora de vender */
    function cambia_provincia(){
//tomo el valor del select del pais elegido
var pais
//var pais2
//pais = document.autoSumForm1.pais[document.autoSumForm1.pais.selectedIndex].value
pais = document.autoSumForm1.cortadoInstalado[document.autoSumForm1.cortadoInstalado.selectedIndex].value
//pais2 = document.autoSumForm1.pais2[document.autoSumForm1.pais2.selectedIndex].value
//miro a ver si el pais est? definido
if (pais != 0) {
var mi_numero; 
mi_numero =document.autoSumForm1.cortadoInstalado.value*document.autoSumForm1.txtmedidas.value
mi_numero=mi_numero*100;
mi_numero=Math.floor(mi_numero);
mi_numero=mi_numero/100;

document.autoSumForm1.precio2.value=mi_numero
//alert(document.autoSumForm1.pais);	
}
// if(pais2 != 0) {document.autoSumForm1.precio2.value=document.autoSumForm1.pais2.value*document.autoSumForm1.txtmedidas.value
//	
//}
} 

</script>
</head>

<body>
  <?   foreach($carro as $k => $v){// no olvidar ver como inicializamos la variabl carro si no noca rga fdrmulario 
      // para luego introducir el formuklarioo con el cual cree la session variable dedlarada 
      //en linea 9 }// para luego introducir el formuklarioo con el cual cree la session variable dedlarada 
      //en linea 9 - line 50     
  }?>
     <form name="autoSumForm1" method="post" action="agregacar.php"> 

<?php
$idp=$_GET["idproducto"];// idproducto que  escojo para ingresarla a la sesion 
include("../func/funciones.php");
$datos= dime("select *  from productos where idproductos=$idp");
$row =  mysql_fetch_array($datos);
       if($row['tipo_vidrio_idtipo_vidrio']!="0"){
            $link=1;//rntonces si es vidrio
            echo $row['tipo_vidrio_idtipo_vidrio'];            
            //########################################################
                  $consulata_tipo=dime("select p.idproductos,tp.cortado,tp.instalado 
from productos p inner join tipo_vidrio tp on
p.tipo_vidrio_idtipo_vidrio=tp.idtipo_vidrio 
where p.idproductos =$idp");
                  
// $subto=$v['cantidad']*$v['precio']; 
// $suma=$suma+$subto; //por qui  hacer la modificacion para otros prodfuctos actualizar bd Oo
// $contador++; 
	$CortadoInstalado= "---------------------------------------------------------	<br>
          <!-- comenzamos el formulario para procesar venta -->
	ancho:<input type='text' onblur='NoSumar();' onfocus='pies();' maxlength='5' size='10' name='ancho' id='ancho'>
	alto:<input type='text' onblur='NoSumar();' onfocus='pies();' maxlength='5' size='10' name='alto' id='alto'><br>
	P2:<input id='resultado' type='text' value='' maxlength='5' size='10' name='txtmedidas'><br>";
	 //**** 
      $CortadoInstalado.="<select id ='cortadoInstalado' name='cortadoInstalado' class='select'  onchange='cambia_provincia()'
<option value=''>Cortado / Instaldo</option>";
     	while($tipoPro=mysql_fetch_array($consulata_tipo)){
    	$CortadoInstalado.="<option value='".$tipoPro['cortado'] ."'>Cortado</option>";
    	$CortadoInstalado.="<option value='".$tipoPro['instalado'] ."'>Instalado</option>";}
             $CortadoInstalado.="</select>
        Precio:<input type='text'  maxlength='5' size='10' name='precio2' id='precio2'>
        <br>
        <input type='text' name='id' value='".$row['idproductos']."'>";
             
           //para agregar a factura  
          if(!$carro || !isset($carro[md5($filas['idproductos'])]['identificador']) || $carro[md5($filas['idproductos'])]['identificador']!= md5($filas['idproductos'])){ 
$cadenaAgregarQuitar="<td><a href='agregacar.php?SID&id=".$row['idproductos']."'>
<img src='../imagenes/productonoagregado.gif' border='0' title='Agregar al Carrito'></a>
 </td>";
              $cadenaAgregarQuitar="<input name='df' type='image' src='imagenes/panel/Knob Refresh.png'>";
		}else{
$cadenaAgregarQuitar="<td><a href='borracar.php?SID&id=".$row['idproductos']."'>
<img src='../imagenes/trash.gif' border='0' title='Agregar al Carrito'></a></td>";		
	} 
           //para agregar a factura end  
	$CortadoInstalado.=$cadenaAgregarQuitar;
              
             echo $CortadoInstalado;
             //****   
            //########################################################
//            $vender="<a href='ventaVidrio.php?idproducto=".$filas['idproductos']."'>
//<img src='../imagenes/.gif' border='0' title='Vender'>Vender</a>";
        }  else {
            $link=0;//rntonces si no tiene tipo de vidrio no es vidrio
//            $vender="";
        } 
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
        
?>
         </form>
     
</body>
</html>
