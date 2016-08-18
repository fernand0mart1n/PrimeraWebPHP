<?php require __DIR__.'/vistas/header.php'; ?>
		<h1>PRIMER PROYECTO PHP</h1>
		<h2>Hoy es: <?php echo date("d/m/y");?></h2>
		<h2>Menú</h2>
		<a href="listado.php?edad=15">Prueba menores</a>
		<a href="listado.php?edad=35">Prueba mayores</a>
		<br>
		<a href="form.php">Ir al formulario</a>
<?php require __DIR__.'/vistas/footer.php'; ?>