<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario películas</title>
	<!-- Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">

	<?php

	$Nombre = $_POST['nombrePelicula'];
	$Descripcion = $_POST['descripcion'];
	
	
    $contenido=
    "Nombre: $Nombre
     Descripcion: $Descripcion";

	$archivo = fopen("peliculas.txt", "w");
	fwrite($archivo,$contenido);
	// Instrucciones para guardar los datos en el archivo libros.txt
     
    ?>

    <?php
    $lecturaArchivo = fopen("peliculas.txt", "r");
	while (!feof($lecturaArchivo)) {
	$linea = fgets($lecturaArchivo);
	echo nl2br($linea);
	}

	fclose($lecturaArchivo);

	?>

</head>
<body> 
	<div>
	<h2>La información a sido almacenada de manera correcta :)</h2>
    </div>
</body>
</html>