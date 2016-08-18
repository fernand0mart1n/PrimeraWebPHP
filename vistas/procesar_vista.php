<?php require __DIR__.'/header.php'; ?>
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
	</div>
<?php require __DIR__.'/footer.php'; ?>