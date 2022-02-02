<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario películas</title>
	<!-- Cargar los estilos -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-warning">
  		<div class="hero-body">
    		<p class="title">Información de películas :)</p>
  		</div>
	</section>

	<section class="section">
		<p class="subtitle">Ingrese la película que más le ha llamado la atención:</p>

    <section class="section is-normal columns">


    <section class="section">
		
		<form action="guardarPelicula.php" method="post">
			<div>
				<label>Nombre de la película:</label>
				<input type="text" class="input is-warning" name="nombrePelicula" placeholder="Escribe el título">
			</div>

			<div>
				<label>Descripción:</label>
				<textarea name="descripcion" class="input is-warning" placeholder="Agregue la descripción">
                </textarea>
			</div>

			<br><br><input type="submit" class="button is-warning" value="Guardar">
		</form>

	</section>

    </section>

    </body>
</html>



