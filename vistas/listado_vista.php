<?php if(!isset($control)): ?>
	<h2>ERROR DE ACCESO</h2>
<?php die(); ?>
<?php endif; ?>

<?php require 'header.php'; ?>
	<p>Edad ingresada: <?php echo $edad; ?></p>
	<?php if($edad > 18): ?>
		<h2>BIENVENIDO MAYOR DE EDAD</h2>
	<?php else: ?>
		<h2 style="color: red;"> ERROR: NO SOS MAYOR DE EDAD</h2>
	<?php endif; ?>

	<ul>
	<?php foreach ($frutas as $fruta): ?>
		<li><?php echo $fruta; ?></li>
	<?php endforeach; ?>
	</ul>
<?php require 'footer.php'; ?>