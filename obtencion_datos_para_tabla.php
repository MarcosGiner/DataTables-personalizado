<?php
	$data = array(
			"data"=>array(
				array(
					"nombre"=>"Peter",
					"apellido"=>"Griffin",
					"provincia"=>"Quahog",
					"edad"=>"12"
				),
				array(
					"nombre"=>"Homer",
					"apellido"=>"Simpson",
					"provincia"=>"Springfield",
					"edad"=>"34"
				),
				array(
					"nombre"=>"Turanga",
					"apellido"=>"Leela",
					"provincia"=>"New New York",
					"edad"=>"45"
				)
			)
	);

	header('Content-type: application/json');
	echo json_encode($data);
?>