<?php 
include("../func/funciones.php");
#resivimos las variables
$guias1 = quitar($_POST["guias1"]);
$ubicacion_img = quitar($_POST["ubicacion_imagen"]);
$cadenatexto = quitar($_POST["cadenatexto"]); 
$tipoProducto= quitar($_POST['tipoProductos']);
$precio= quitar($_POST['txtPrecio']);
$unidadM= quitar($_POST['txtund']);
$codigoProducto= quitar($_POST['codigoProducto']);
$precioM2= quitar($_POST['txtPrecioM2']);
$txtmedidas= quitar($_POST['txtmedidas']);
$precioMa= quitar($_POST['txtPrecioMayorista']);
$txtCantidad= quitar($_POST['txtCantidad']);
$txtCantidadMinima= quitar($_POST['txtCantidadMinima']);
$txtfechacaducidad= $_POST['txtFechaCadu'];

//fecha
$tDate = strtotime($_POST['txtFechaCadu']);
$dateToMySQL = date("Y-m-d",$tDate); // Formato de Date en mysql es: aaaa-mm-dd
$fechaguia= strtotime($_POST['fechaguia']);
$fechaguiaMysql =date("Y-m-d",$fechaguia); 
//fecha end
//echo "nombreProducto_$cadenatexto: " . $cadenatexto . "<br><br>"; 
//datos del arhivo 
if($codigoProducto != "" && $cadenatexto!= ""&& $precio!= ""&& $precioMa!= ""&& $tipoProducto!= "0"
        && $txtCantidad!= "" ) 
       { 



$n_file1 = ($_FILES['file1']['name']);#nombre                  TERMINAL ELECTRICO.bmp
$n_file1_tmp = $_FILES['file1']['tmp_name'];#nombre temporal C:\WINDOWS\Temp\php273A.tmp
$n_file1_size = $_FILES['file1']['size'];#tamaño             57694
$n_file1_type = $_FILES['file1']['type'];#tipo               image/bmp	
    if ($n_file1 == '') //  
        { 
        $n_file1 = ""; $sin_file1 = "TRUE"; 
    } else {
          $n_file1 = $cadenatexto;    // CON FICHERO renombrar($n_file1);
          $sin_file1 = "FALSE";
                //$fecha_pp1 = date("Y-m-d"); # tengo problemas co esto
                    }  
//Dirección donde se guardaran los archivos cargados
$upload_ficheros = "imagenes/contenido/";//Mover direccion temporal de FILE 1 a DIRECCION FINAL en ficheros/pdfs/
$sep=explode('image/',$n_file1_type); // Separamos image/                      //image/bmp
$tipo=$sep[1]; // Optenemos el tipo de imagen que es 
if($tipo == "gif" || $tipo == "pjpeg" || $tipo == "bmp"|| $tipo == "jpeg"|| $tipo == "png"){ 
	if ($tipo =="jpeg") $tipo2 = "jpg"; 	if ($tipo =="bmp")$tipo2 = "bmp";	if ($tipo =="pjpeg")$tipo2 = "jpg"; if ($tipo =="png") $tipo2 = "png";
if ($sin_file1 != "TRUE")
{
    $n_path_file1        =    $upload_ficheros.$codigoProducto.'.'.$tipo2;#codigoProducto para el nombre de la imagen 
    $resultado1        =    move_uploaded_file($n_file1_tmp, $n_path_file1);
    if (!$resultado1)
        {
            echo "ERROR: El archivo no pudo ser cargado al servidor";
            exit;
        }
	    }	    
} 
else echo "el tipo de archivo no es de los permitidos";// Si no es el tipo permitido lo desimos 
#ahora modificamos la BD en la tabla productos
$consulta = "INSERT INTO productos(guias_idguias,codigo_producto,
		descripcion_producto,
		precio,precio_x_metro,precio_mayorista,
		tipos_de_productos_idtipos_de_productos,
		unidad_medida,medidas_producto,Cantidad_producto,cantidad_minima,fecha_caducidad_pro,fecha_ingreso_pro,
		ruta_img1 )  
 VALUES ('$guias1','$codigoProducto',
 		'$cadenatexto',
		'$precio','$precioM2','$precioMa',
		$tipoProducto,
		'$unidadM','$txtmedidas',$txtCantidad,'$txtCantidadMinima','$dateToMySQL','$fechaguiaMysql',
		'$n_path_file1')";
$result = dime($consulta)or die(mysql_error());					 
					 /*$consulta = 
					 "INSERT INTO imagenes(nombre_imagen,ruta_imagen)  VALUES ('$cadenatexto','$n_path_file1')"*********modificar aqui nada m'as****************/
/*name="txtNombreProducto" 
name="txtDescripcion" 
name="cadenatexto" 
name="MAX_FILE_SIZE" 
name="file1"*/

//echo "---------".$n_path_file1;
//$last_img_id = mysql_insert_id();
//$consulta2i = "INSERT INTO productos_has_imagenes (productos_idproductos,imagenes_idimagenes) 
 //              VALUES  ($cadenatexto,$last_img_id)";
//$resultado_completo= dime($consulta2i)or die(mysql_error());
echo "<script>document.location.href='panel.php'</script>";
//include ("admin/includes/footer.php"); 
}
 else{
          echo "introdusca datos <a href='javascript:history.go(-1)'>Atras</a> ";}

?> 