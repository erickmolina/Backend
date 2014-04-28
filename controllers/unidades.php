<?php
	require_once '../models/funcionesUnidad.php';
	
	if(isset($_GET['tag']) && ($_GET['tag'] == 'obtenerUnidadesRuta'))
	{	
		$response = obtenerUnidadesRuta($_GET['Nombre_Ruta']);
		echo json_encode($response);
		
	}
	
	if(isset($_GET['tag']) && ($_GET['tag'] == 'getAllUnidades'))
	{	
		$response = getAllUnidades();
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