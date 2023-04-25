<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formularioCss.css">
    <title>Formulario Consolas</title>
</head>
<body>
<br>
		<form action='../scripts/insertarConsola.php' method="POST" class="text">
			<h2>Consolas</h2>
			<label for="Nombre">Nombre:</label>
			<input type="text" id="Nombre" name="Nombre">
		
			<label for="Almacenamiento">Almacenamiento:</label>
			<input type="text" id="Almacenamiento" name="Almacenamiento">
		
			<label for="RAM">RAM:</label>
			<input type="text" id="RAM" name="RAM">
		
			<label for="Precio">Precio:</label>
			<input type="number" id="Precio" name="Precio">

			<label for="Color">Color:</label>
			<input type="text" id="Color" name="Color">

			<label for="Lanzamiento">Lanzamiento:</label>
			<input type="date" id="Lanzamiento" name="Lanzamiento">

			<div class="container text-center">
				<button type="submit" class="button">Enviar</button>
			</div>
		</form>
</body>
</html>