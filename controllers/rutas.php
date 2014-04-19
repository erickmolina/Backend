<?php
	require_once '../models/funcionesRuta.php';
	//include ("funcionesRuta.php");
	
	if(isset($_GET['tag']) && ($_GET['tag'] == 'obtenerListaRutas')))
	{	
		$response = obtenerListaRutas();
		echo json_encode($response);
	}
	else
	{
		$response = array();
		$response["success"] = 0;
		$response["message"] = "Peticion Invalida o Faltan parametros";
		echo json_encode($response);
	}
?>