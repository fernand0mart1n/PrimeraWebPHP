<?php require __DIR__.'/header.php'; ?>
<?php if(!isset($autorizado)): ?>
	<h2>Usted no está autorizado a ingresar a este área.</h2>
<?php die(); ?>
<?php endif; ?>
	<div class="col-xs-12">
		<h3><?php echo $ok ?></h3>
		<hr>
		<h4>Sus datos:</h4>
		<ul>
			<li><?php echo $nombre ?></li>
			<br>
			<li><?php echo $edad ?></li>
			<br>
			<li><?php echo $lugar ?></li>
		</ul>
		<a type="button" class="btn btn-primary" href="index.php">
			<span class="glyphicon glyphicon-chevron-left"></span>Volver al inicio
		</a>
	</div>
<?php require __DIR__.'/footer.php'; ?>