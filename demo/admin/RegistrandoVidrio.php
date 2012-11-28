<?php 
include("../func/funciones.php");
#resivimos las variables
 $file1=quitar($_POST['file1']);
   $unimedida=quitar($_POST['unimedida']);//--
  $txtmedidas=quitar($_POST['txtmedidas']);//--
 $guias1=quitar($_POST['guias1']); //
 $tipoProducto=quitar($_POST['tipoProducto']);
 $codigoProducto=quitar($_POST['codigoProducto']);//
 $cadenatexto=quitar($_POST['cadenatexto']);//
 $idnombre_tipo_vidrio=quitar($_POST['nombre_tipo_vidrio']);//
 $txtPrecio=quitar($_POST['txtPrecio']);//
 $txtCantidad=quitar($_POST['txtCantidad']); //
 $txtPrecioM2=quitar($_POST['txtPrecioM2']);//*-
$txtPrecioMayorista=quitar($_POST['txtPrecioMayorista']);//*-
//por si no se introduzca precio mayorista
if ($txtPrecioM2 == "")$txtPrecioM2 = "Null";
if ($txtPrecio == "")$txtPrecio = "Null";

if ($txtPrecioMayorista == "")$txtPrecioMayorista = "Null";
if ($file1 == "")$file1 = "Null";
$n_file1 = ($_FILES['file1']['name']);#nombre                  TERMINAL ELECTRICO.bmp
$n_file1_tmp = $_FILES['file1']['tmp_name'];#nombre temporal C:\WINDOWS\Temp\php273A.tmp
$n_file1_size = $_FILES['file1']['size'];#tama�o             57694
$n_file1_type = $_FILES['file1']['type'];#tipo               image/bmp	
    if ($n_file1 == '') //  
        { 
        $n_file1 = ""; $sin_file1 = "TRUE"; 
    } else {
          $n_file1 = $cadenatexto;    // CON FICHERO renombrar($n_file1);
          $sin_file1 = "FALSE";
                //$fecha_pp1 = date("Y-m-d"); # tengo problemas co esto
                    }  
//Direcci�n donde se guardaran los archivos cargados
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
$consulta = "INSERT INTO productos(guias_idguias,
            tipos_de_productos_idtipos_de_productos,
            codigo_producto,descripcion_producto,
            unidad_medida,
            medidas_producto,
            tipo_vidrio_idtipo_vidrio,
            precio,
            Cantidad_producto,
            precio_x_metro,
            precio_mayorista,
            ruta_img1)  
 VALUES ('$guias1',
        '$tipoProducto',
        '$codigoProducto',
        '$cadenatexto',
        '$unimedida',
        '$txtmedidas',
        '$idnombre_tipo_vidrio',
        '$txtPrecio',
        '$txtCantidad',
        '$txtPrecioM2',
        '$txtPrecioMayorista',
        '$n_path_file1')";
$result = dime($consulta)or die(mysql_error());					 
echo "<script>document.location.href='panel2.php'</script>";
//include ("admin/includes/footer.php"); 
?> 