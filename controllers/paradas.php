<?php
	require_once '../models/funcionesParada.php';
	//include ("funcionesParada.php");
	
	if(isset($_GET['tag']) && ($_GET['tag'] == 'obtenerParadas'))
	{	
		$response = obtenerParadas($_GET['Nombre_Ruta']);
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