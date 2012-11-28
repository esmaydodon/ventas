<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ivvertical - cajamarcaparanormal@hotmail.com</title>
 <link rel="stylesheet" type="text/css" href="../css/admin.css"/>
 <style type="text/css">
#contenedor_on{
	font-size:12pt;
	text-align: left;
	background-color:#903;
	height:200px;
	width: 500px;
	margin:auto;/*"auto", para que Mozilla y otros navegadores centren la capa*/    /*border: 2px solid #cccccc;*/
	border:solid #000 1px;
}
.login{
margin:50px 60px 0px 60px; 
	/*margin:auto;/*"auto", para que Mozilla y otros navegadores centren la capa*/    /*border: 2px solid #cccccc;*/
 	width:350px;
	height:85px;
	background: #000;/* url(imagenes/8.jpg) repeat-x;*/
	color:#FFF;
}  

</style>
 
</head>

<body>


<div id="contenedor_on">
<!--<div id="articulos"></div>--><!--<div id="videos">fd</div>-->
<div class="login">
<!-- <a title="http://ccmixter.org/people/bradstanfield/profile" rel="nofollow" class="cc_format_link" href="http://ccmixter.org/people/bradstanfield/profile">Brad Stanfield</a> "Modern Retro Rock".-->
<div id="ingreso">
<form action="validar.php" method="post">
<? if ($_GET["errorUsuario"=="si"]){ ?>
<span style="color:#FFF">errorUsuario</span> 
<? }else{?>
<span style="color: #903;">introduce tu clave de acceso</span>
<? }?><br>
usuario<input type="text" name="usuario_text" size="15" maxlength="50" value="usuario" id="usuario_text" />
<input type="password" name="pass_text" size="15" maxlength="50" id="pass_text"  />
<input type="submit" value="entrar" />
</form>
</div>
</div></div>
</body></html>