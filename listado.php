<?php

	$control = true;

	//variables
	$edad		   = (int)$_GET["edad"];
	$estaLloviendo = false;
	$frutas		   = ["Peras", "Manzanas", "Bananas"];

	require __DIR__.'/vistas/listado_vista.php';