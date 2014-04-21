<?php
	require_once 'conexion.php';
	//------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
	function obtenerListaRutas()
	{
		$response = array();
		$conexion = abrirConexion();
		$query = "CALL SP_MostrarRutas";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		// check for empty result
		if (mysqli_num_rows($result) > 0) 
		{
			$response["Rutas"] = array();
		 
			while ($row = mysqli_fetch_array($result)) 
			{
				// temp user array
				$ruta = array();
				$ruta["Nombre_Ruta"] = $row["Descripcion"];
		 
				// guarda el nombre de las rutas en el arreglo
				array_push($response["Rutas"], $ruta);
			}
			// success
			$response["success"] = 1;
		} 
		else 
		{
			// no se encuentran rutas
			$response["success"] = 0;
			$response["message"] = "No se encontraron rutas";
		 
			// echo no users JSON
		}
		cerrarConexion();
		return $response;
	}
	
	function insertarRuta($idempresa,$nombre,$tarifa)
	{
		$response = 0;
		$conexion = abrirConexion();
		$query = "CALL SP_InsertaRuta('$idempresa','$nombre','$tarifa')";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		$response = mysqli_insert_id();
		cerrarConexion();
		return $response;
	}
	

?>