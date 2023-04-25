<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Carrusel de Imágenes</title>
	<!-- Importar Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Importar Bootstrap JS y jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicadores del carrusel -->
			<ul class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ul>
			<!-- Imágenes del carrusel -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://picsum.photos/id/10/1200/600" alt="Imagen 1" style="width:100%;">
				</div>
				<div class="carousel-item">
					<img src="https://picsum.photos/id/20/1200/600" alt="Imagen 2" style="width:100%;">
				</div>
				<div class="carousel-item">
					<img src="https://picsum.photos/id/30/1200/600" alt="Imagen 3" style="width:100%;">
				</div>
			</div>
			<!-- Controles del carrusel -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>
</body>
</html>
