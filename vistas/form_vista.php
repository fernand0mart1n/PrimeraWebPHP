<?php require __DIR__.'/header.php'; ?>
<?php if(!isset($autorizado)): ?>
	<h2>Usted no está autorizado a ingresar a este área.</h2>
	<?php die(); ?>
<?php endif; ?>
	<!-- FORM: nombre, edad, lugar (select). procesar.php (validar), procesar_vista.php-->
	<div class="col-xs-12">
		<form class="form-horizontal responsive" method="POST" action="procesar.php">
			<h1 class="page-header text-center">Formulario</h1>
			<?php if(count($errores)): ?>
				<div class="col-xs-offset-4 col-xs-5 alert alert-danger" role="alert">
					<?php foreach ($errores as $error): ?>
						<p><?php echo $error; ?></p>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<div class="form-group">
				<label for="nombre" class="col-xs-4 control-label">Nombre:</label>
				<div class="col-xs-5">
					<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" autofocus="true" >
				</div>
			</div>
			<div class="form-group">
				<label for="edad" class="col-xs-4 control-label">Edad:</label>
				<div class="col-xs-5">
					<input type="text" id="edad" name="edad" class="form-control" placeholder="Edad" >
				</div>
			</div>
			<div class="form-group">
				<label for="lugar" class="col-xs-4 control-label">Lugar:</label>
				<div class="col-xs-5">
					<select class="form-control" id="lugar" name="lugar" >
						<?php foreach ($paises as $valor => $pais): ?>
							<option value="<?php echo $valor ?>"><?php echo $pais ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-5 col-xs-offset-4">
					<a type="button" class="btn btn-default" href="index.php">
						<span class="glyphicon glyphicon-chevron-left"></span>Volver al inicio
					</a>
					<button type="submit" class="btn btn-primary pull-right">
						Enviar <span class="glyphicon glyphicon-send"></span>
					</button>
				</div>
			</div>
		</form>
	</div>
<?php require __DIR__.'/footer.php'; ?>