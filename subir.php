<?php

	$archivo = $_FILES["file"]["tmp_name"];
	$nombre = $_FILES["file"]["name"];
	$ruta = "./";
	
	if (move_uploaded_file($archivo, $ruta.$nombre)){
		echo "Archivo subido";
		echo '
		
			<img src="$nombre">
		
		';
	}

?>