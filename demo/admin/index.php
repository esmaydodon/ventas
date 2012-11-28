<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/formulario.css" type="text/css" rel="stylesheet" />
<?
include("../func/funciones.php");
?>
<meta name="verify-v1" content="HVBxLs/wqY+07YtWvJgwcuftNbp3xZ8iUvGLivZlvRA=" />
<script type="text/javascript" src="../js/ajax.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript"> 
 $(document).ready(function(){
 	//para imprimir
        $("#adminfrm").css("display", "block");
	$("#password").click(function(){
         $("#ventasfrm").css("display", "block");
         $("#adminfrm").css("display", "none");
        });
        $("#password2").click(function(){
         $("#adminfrm").css("display", "block");
         $("#ventasfrm").css("display", "none");
        });

   
         
  }) 		 
</script>
<title>Bienvenidos</title>
<link href="../incawasi/css/menu.css" rel="stylesheet" type="text/css" />
<link href="../incawasi/css/estilo_home.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#contenedor_carrito{
	font-size:11pt;
	text-align: left;
	background-color:#fff;
	width: 798px;
	height:600px;
	margin:auto;/*"auto", para que Mozilla y otros navegadores centren la capa*/    /*border: 2px solid #cccccc;*/
	border: 1px solid  #dfedfe;
	font: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}

 .noti{
	border: 1px solid  #dfedfe;
	padding: 3px;;
	width:350px;
	height:280px;
	float:left;
	margin:5px;
	/*border-radius:7px;-moz-border-radius: 7px; -webkit-border-radius : 7px;*/}
 
.noti img{
	border: 0px;
	float:left;
	margin: 2px 7px 2px 0px;
	}	
.noti-pie{clear:both;}
.noti-pie img{ margin: 1px;}
.columna_derecha{
	float:left;
	width:250px;
	height:850px;
	background: #000/* url(imagenes/8.jpg) repeat-x;*/
}  
#noticias{ width:600px;
height:200px;}
#videos{ float: left;}
#pie{color:#AAA; font-size:10pt;
margin: 0px;
padding: 0px;
width: 100%;
background:  #000  url(../../imagenes/bg-footer.png) repeat-x;
clear:both;}
.noti-pie{ width:100%; height:50px; margin-right:0px;}
a:link {
	color: #325E94;
}
a:visited {
	color: #4A4A4A;
}
#articulos{
	width:700px;
	height:728px;
}
.clearfloat { /* esta clase debe colocarse en un elemento div o break y debe ser el último elemento antes del cierre de un contenedor que incluya completamente a un elemento flotante */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
#loogo-cliente{with:600px; height:200px; background-color:red; background-image:url(../imagenes/logo-cliente.png);}
.loogo-cliente-linea{with:600px; height:10px; background-color:red; background-image:url(../imagenes/linea.png );}
.frm-ventas{
	float:right;
        display: none;
        
}
.frm-ventas span input{ background-color:  #fff;
width: 200px;
height: 30px;
margin: 5px 0px 5px 0px;
border-radius: 20px;
}
.frm-ventas span  input[type='submit']{
	border: 1px solid #CED5D7;
	box-shadow:0 0 0 3px #EEF5F7;
	padding: 8px 16px;
	border-radius: 20px;
	font-weight: bold;
	text-shadow: 1px 1px 0px white;
	
	background: #e4f1f6; 
	background: -moz-linear-gradient(top, #e4f1f6 0%, #cfe6ef 100%);
	background: -webkit-linear-gradient(top, #e4f1f6 0%,#cfe6ef 100%); 
}
.frm-ventas span input[type='submit']:hover{
	background: #edfcff; 
	background: -moz-linear-gradient(top, #edfcff 0%, #cfe6ef 100%);
	background: -webkit-linear-gradient(top, #edfcff 0%,#cfe6ef 100%); 
}
.frm-ventas span  select{
    padding: 4px 6px;
	width: 200px;
        border-radius: 20px;
	border: 1px solid #CED5D7;
	resize: none;
	box-shadow:0 0 0 3px #EEF5F7;
	margin: 5px 0px 5px 0px;
      font-family: monospace;  
      font-size: 15px;
}
#imagen-frm{
	margin-left:10px;
	width:356px;
	height:150px;
	float:left;
	background-image:url(../imagenes/imagen.png );
        background-repeat: no-repeat;
}
#nick{   width:166px; height:43px;  float:left; background-image:url(../imagenes/nick.png );  }
#password{
	width:166px;
	height:43px;
	float:right;
	background-image:url(../imagenes/nick.png );
	clear: both;
}
#password2{
	width:135px;
	height:43px;
	margin-right:30px;
	float:right;
	background-image:url(../imagenes/password.png );
	clear: both;
}
</style> 
<link rel="shortcut icon" href="imagenes/favicon.ico"/> 
</head>

<body class="incawasi" id="login-page">

<div id="container" style="display:none;">
  <div id="mainContent">
   
   
  <!-- end #mainContent --></div>
<!-- end #container --></div>
<div id="formularioin">
<div class="login-wrap">
	<div class="mensaje">
     <div id="divFormularioVentas">
     <div id="loogo-cliente">
     </div>
     <div class="loogo-cliente-linea">
     </div> 
     <div id="imagen-frm">
     <div id="password"></div><br>
       <div id="password2"></div>
        
       
     </div>
          
         <div id="ventasfrm" class="frm-ventas">
             <form action="validar.php" method="post">
           v<input type="hidden" value="2" name="tipoUsuario" />
            
            <span><input type="text" name="usuario_text" /></span>            
            <br/>
            
            <span><input type="text" name="pass_text" /></span>
            <br>
            
           
            <span> <?php
$consulata_tipo2=dime('select * from  local order by  idlocal desc');
    echo"<select id ='local' name='local' class='select'>
	     <option value='0'>Seleccione Local</option>";
		while($local=mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$local['idlocal']."'>".$local['nombre_local']."</option>";}
	echo"</select></br>";
        ?></span><span><input type="submit" name="Submit" value="Ingresar" /></span>	
           
             </form> 
     </div>
         
         
         <div id="adminfrm" class="frm-ventas">
             <form action="validar.php" method="post">
            <input type="hidden" value="1" name="tipoUsuario" />
            
            <span><input type="text" name="usuario_text" /></span>            
            <br/>
            
            <span><input type="password" name="pass_text" /></span>
            <br>
            
           
            <span> <?php
$consulata_tipo2=dime('select * from  local order by  idlocal desc');
    echo"<select id ='local' name='local' class='select'>
	     <option value='0'>Seleccione Local</option>";
		while($local=mysql_fetch_array($consulata_tipo2)){
    	echo"<option value='".$local['idlocal']."'>".$local['nombre_local']."</option>";}
	echo"</select></br>";
        ?></span><span><input type="submit" name="Submit" value="Ingresar" /></span>	
           
             </form> 
     </div>
     
            </div>
    </div>
	
    
</div>
</div>
 

</body>
</html>