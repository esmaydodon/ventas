<?php
function quitar($cadena){
	$cadena = str_replace("<","&lt;",trim($cadena));
	$cadena = str_replace(">","&gt;",trim($cadena));
	$cadena = str_replace("\'","&#39;",trim($cadena));
	$cadena = str_replace('\"',"&quot;",trim($cadena));
	$cadena = str_replace("\\\\","&#92;",trim($cadena));
	$cadena = str_replace("<","&lt;",trim($cadena));
	$cadena = str_replace("<p>","",trim($cadena));
	$cadena = str_replace("</p>","",trim($cadena));
	$cadena = str_replace('"',"&quot;",trim($cadena));
	$cadena = str_replace("�","&ntilde;",trim($cadena));

	$cadena=str_replace("�","&#225;",trim($cadena));
	$cadena=str_replace("�","&#224;",trim($cadena));
	$cadena=str_replace("�","&#232;",trim($cadena));
	$cadena=str_replace("�","&#233;",trim($cadena));
	$cadena=str_replace("�", "&#237",trim($cadena));
	$cadena=str_replace("�", "&#236",trim($cadena));
	$cadena=str_replace("�", "&#242;",trim($cadena));
	$cadena=str_replace("�", "&#243;",trim($cadena));
	$cadena=str_replace("�", "u",trim($cadena));
	$cadena=str_replace("�", "u",trim($cadena));
	return $cadena;
}
/*
 /*
&#192; �  	letra may�scula latina A con acento grave
&#193; � 	letra may�scula latina A con acento agudo
&#194; � 	letra may�scula latina A con acento circunflejo
&#195; � 	letra may�scula latina A con tilde
&#196; � 	letra may�scula latina A con di�resis
&#200; � 	letra may�scula latina E con acento grave
&#201; � 	letra may�scula latina E con acento agudo
&#202; � 	letra may�scula latina E con acento circunflejo
&#203; � 	letra may�scula latina E con di�resis
&#204; � 	letra may�scula latina I con acento grave
&#205; � 	letra may�scula latina I con acento agudo
&#206; � 	letra may�scula latina I con acento circunflejo
&#207; � 	letra may�scula latina I con di�resis
&#210; � 	letra may�scula latina O con acento grave
&#211;� 	letra may�scula latina O con acento agudo
&#212; � 	letra may�scula latina O con acento circunflejo
&#213; � 	letra may�scula latina O con tilde
&#214; � 	letra may�scula latina O con di�resis
&#217; � 	letra may�scula latina U con acento grave
&#218; � 	letra may�scula latina U con acento agundo
&#219; � 	letra may�scula latina U con acento circunflejo
&#220; � 	letra may�scula latina U con di�resis
&#352; � 	letra may�scula latina S con anticircunflejo
&#221; � 	letra may�scula latina Y con acento agudo
&#376; � 	letra may�scula latina Y con di�resis
&#224; � 	letra min�scula latina a con acento grave
&#225; � 	letra min�scula latina a con acento agudo
&#226; � 	letra min�scula latina a con acento circunflejo
&#227; � 	letra min�scula latina a con tilde
&#228; � 	letra min�scula latina a con di�resis
&#232; � 	letra min�scula latina e con acento grave
&#233; � 	letra min�scula latina e con acento agudo
&#234; � 	letra min�scula latina e con acento circunflejo
&#235; � 	letra min�scula latina e con di�resis
&#236; � 	letra min�scula latina i con acento grave
&#237; � 	letra min�scula latina i con acento agudo
&#238; � 	letra min�scula latina i con acento circunflejo
&#239; � 	letra min�scula latina i con di�resis
&#242; � 	letra min�scula latina o con acento grave
&#243; � 	letra min�scula latina o con acento agudo
&#244; � 	letra min�scula latina o con acento circunflejo
&#245; � 	letra min�scula latina o con tilde
&#246; � 	letra min�scula latina o con di�resis
&#249; � 	letra min�scula latina u con acento grave
&#250; � 	letra min�scula latina u con acento agudo
&#251; � 	letra min�scula latina u con acento circunflejo
&#252; � 	letra min�scula latina u con di�resis
&#353; � 	letra min�scula latina S con anticircunflejo
&#253; � 	letra min�scula latina y con acento agudo
&#255; �
*/
date_default_timezone_set('America/Lima');

?>