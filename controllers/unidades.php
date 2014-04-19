<?php
	require_once '../models/funcionesUnidad.php';
	//include ("funcionesUnidad.php");
	
	if(isset($_GET['tag']) && ($_GET['tag'] == 'obtenerUnidades'))
	{	
		$response = obtenerUnidades($_GET['Nombre_Ruta']);
		echo json_encode($response);
		
	}
	
	else if (isset($_POST['identifier']) && isset($_POST['latitud']) && isset($_POST['longitud']) && isset($_POST['state'])) 
	{
		$response = actualizarUbicacion($_POST['identifier'],$_POST['latitud'],$_POST['longitud'] ,$_POST['state']);
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