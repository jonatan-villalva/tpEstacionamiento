<?php
$miArchivo = fopen("registro.txt", 'r');
while (!feof($miArchivo)) {
	$objeto =json_decode(fgets($miArchivo));
	if($objeto->nombre ==$_GET['nombre'])
	{


		
	}
}
fclose($miArchivo);
?>