<?php
	require_once '../models/funcionesRuta.php';
	require_once '../controllers/sesion.php';
	
	if(isset($_GET['tag']) && ($_GET['tag'] == 'obtenerListaRutas'))
	{	
		$response = obtenerListaRutas();
		echo json_encode($response);
	}
	else if (isset($_POST['listaempresa']) && isset($_POST['descipcion']) && isset($_POST['tarifa']))
	{
		$result = insertarRuta($_POST['listaempresa'],$_POST['descipcion'],$_POST['tarifa']);
		if(result== 0){
			header('Location: ../views/rutaAgregarAdmin.php');
		}
		else{
			echo "No se pudo insertar";
		}
	}
	else
	{
		$response = array();
		$response["success"] = 0;
		$response["message"] = "Peticion Invalida o Faltan parametros";
		echo json_encode($response);
	}
?>