<?php require __DIR__.'/header.php'; ?>
<!-- FORM: nombre, edad, lugar (select). procesar.php (validar), procesar_vista.php-->
	<style type="text/css">
		legend {
			text-align: center;
		}
	</style>
	<br>
	<form class="form form-horizontal responsive" method="POST" href="form_vista.php">
	<legend>Formulario</legend>
		<div class="form-group">
			<label for="nombre" class="col-xs-3 control-label">Nombre:</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" placeholder="Nombre" autofocus="true" required>
			</div>
		</div>
		<div class="form-group">
			<label for="edad" class="col-xs-3 control-label">Edad:</label>
			<div class="col-xs-6">
				<input type="text" class="form-control" placeholder="Edad" required>
			</div>
		</div>
		<div class="form-group">
			<label for="lugar" class="col-xs-3 control-label">Lugar:</label>
			<div class="col-xs-6">
				<select class="form-control">
					<option value="Argentina">Argentina</option>
					<option value="Peru">Peru</option>
					<option value="Brasil">Brasil</option>
				</select>
			</div>
		</div>
		<div class="col-xs-offset-3 pull-left">
			<button type="button" class="btn btn-danger" href="/"><span class="glyphicon glyphicon-chevron-left"></span>
				Volver al inicio
			</button>
		</div>
		<div class="col-xs-4 pull-right">
			<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-send"></span>
				Enviar
			</button>
		</div>
	</form>