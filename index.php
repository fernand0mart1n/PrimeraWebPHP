<?php require __DIR__.'/vistas/header.php'; ?>
	<style type="text/css">
	body {
		background-color: black;
		color: white;
	}

	legend {
		color: white;
	}

	.jumbotron {
		border-radius: 10px;
	}

	.jumbotron h2 {
		color: black;
	}

	.jumbotron p {
		color: black;
	}

	a {
		color: white;
	}
	</style>
	<div class="col-xs-12">
		<legend>Programación web II</legend>
		<div class="jumbotron">
			<div class="container">
				<h2>Primer proyecto php (de este año).</h2>
				<p>En este proyecto hay un formulario y patovas.</p>
				<p><a class="btn btn-primary btn-lg" href="form.php" role="button">Ir al formulario</a></p>
			</div>
		</div>
		<h4>Hoy es: <?php echo date("d/m/y");?></h4>
		<legend>Menú</legend>
		<a href="listado.php?edad=15">Prueba menores</a>
		<br>
		<a href="listado.php?edad=35">Prueba mayores</a>
		<br>
	</div>
<?php require __DIR__.'/vistas/footer.php'; ?>