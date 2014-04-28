<?php
	require_once '../models/funcionesRuta.php';
	require_once 'sesion.php';
	
	if(isset($_GET['tag']) && ($_GET['tag'] == 'obtenerListaRutas'))
	{	
		$response = obtenerListaRutas();
		echo json_encode($response);
	}
	else if(isset($_POST['listaempresa']) && isset($_POST['descipcion']) && isset($_POST['tarifa']))
	//else if(isset($_POST['add']))
	{
		$response = insertarRuta($_POST['listaempresa'],$_POST['descipcion'],$_POST['tarifa']);
		if($response == 0){
			echo "1";
		}
		else{
			echo "0";
		}
	}
	else
	{
		echo "-1";
	}
?>