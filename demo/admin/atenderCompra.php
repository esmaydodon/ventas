<?php
include("../func/funciones.php");
$a_editar =  $_POST["id"] ;
$consultaEmail ="select cp.Compras_idCompras,
       cp.productos_idproductos,
        p.nombre_producto,
       cp.detalle_cantidad,
       cp.Precio_compra,
       cp.estado_compra,
        u.email_usuario as comprador,
        u.nombre_apellidos_usu,
	    p.ruta_img1,
		co.compra_fecha,
       pa.email,
	   pa.mensaje, 
       co.compra_fecha,pa.email,pa.mensaje 	  	
from compras_has_productos as cp inner join productos as p on
cp.productos_idproductos = p.idproductos 
inner join compras as co on 
cp.Compras_idCompras=co.idCompras inner join usuarios as u on
co.usuarios_idusuarios=u.idusuarios inner join paraquien as pa on
u.idusuarios=pa.usuarios_idusuarios where  cp.Compras_idCompras = '$a_editar' ";
$resultado = dime($consultaEmail);
$columna = mysql_fetch_array($resultado);
$ema = $columna["comprador"]; $nombre2 = $columna["nombre_apellidos_usu"]; $email=$columna["email"]; $mensaje=$columna["mensaje"];
######### detaLLEL DEL EMAIL #######
$comentarios ="Gracias por su compra, lo estarémos esperando nuvamente.<br>
 <b>id:</b>". $columna['Compras_idCompras']."<br>
	     <b>compra fecha:</b>".$columna['compra_fecha']."<br>
		 email:". $columna['comprador']."<br>
		 <strong>detalle:</strong><br>
		 Producto:".$columna['nombre_producto']."<br>
		 Precio:".$columna['Precio_compra']."<br>
		 Cantidad:".$columna['detalle_cantidad']."<br>
		 <b>Total:</b>".$columna['detalle_cantidad'] * $columna['Precio_compra'] ."<br>
		 <b>Recipient Details:</b><br>Recipient Email:".$columna['email']."<br>
Personal Message:<br>".$columna['mensaje']."<br>";		 
######### detaLLEL DEL EMAIL END #######
$nombre="Incawasi org.";
$email_contacto ="webmaster@incawasi.org";
require("class.phpmailer.php");
########################################yea
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "webmaster@incawasi.org";// de quien envia
$mail->FromName = $nombre;// nombre de quien Envia (empresa)
$mail->Subject = "Datos de  su Compra";// contenido del correo
$mail->AddAddress($ema,"marlon inca02, ema");
$mail->AddCC("marlon@kuraka.net");
$mail->AddBCC("diosgoogle@hotmail.com");
############## ahora cuerpo
$body  = "Hola <strong>Estimado cliente</strong><br>";
$body .= $comentarios."<br>";
$body .= $nombre."<br>"
		.$email_contacto."<br>"
		.$telefono."<br><font color='red'>Saludos</font>";
$mail->Body = $body;
############## 
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
$mail->AddAttachment("files/demo.zip", "demo.zip");
$mail->Send();
########################################yea end 1
########################################yea 2
$mail2 = new PHPMailer();
$mail2->Host = "localhost";
$mail2->From = $ema;// de quien envia
$mail2->FromName = $nombre2 ;// nombre de quien Envia (empresa)
$mail2->Subject = "Le dedicaron esta Postal (incawasi.org).";// contenido del correo
$mail2->AddAddress($email,"marlon inca02, ema");
############## ahora cuerpo
$body2  = "Hola le edicaron esta postal la puede descargar, en formato ZIP<br>";
$body2 .= $mensaje;
$mail2->Body = $body2;
############## 
$mail2->AddAttachment("files/demo.zip", "demo.zip");
$mail2->Send();
########################################yea end2
echo "Datos enviados<br>";
echo $comentarios;
#Actualizamos la BD el estado a atendido
$query2="UPDATE compras_has_productos set estado_compra= '1' where Compras_idCompras = '$a_editar' ";
 $resultado =mysql_query($query2) or die(mysql_error());
 if($resultado) echo "<script>document.location.href='panel2.php';</script>\n";
   else   echo "Ocurrió un error !!<script>document.location.href='ups.php';</script>\n";
   
?>
