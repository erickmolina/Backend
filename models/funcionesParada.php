<?php
	require_once 'conexion.php';
	//------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
	function obtenerParadasRuta($Nombre_Ruta)
	{	
		$response = array();
		$conexion = abrirConexion();
		$query = "CALL SP_ParadasxRuta('$Nombre_Ruta')";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		// check for empty result
		if (mysqli_num_rows($result) > 0) 
		{
			$response["Paradas"] = array();
		 
			while ($row = mysqli_fetch_array($result)) 
			{
				// temp user array
				$parada = array();
				$parada ["Detalle"] = $row["Detalle"];
				$parada["Informacion"] = $row["Informacion"];
				$parada["Latitud"] = $row["PLatitud"];
				$parada["Longitud"] = $row["PLongitud"];
				
				// guarda el nombre de las paradas en el arreglo
				array_push($response["Paradas"], $parada);
			}
			// success
			$response["success"] = 1;
		} 
		else 
		{
			$response["success"] = 0;
			$response["message"] = "No se encontraron paradas";
		}
		cerrarConexion();
		return $response;
	}
	
	//------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
	function getAllParadas()
	{	
		$response = array();
		$conexion = abrirConexion();
		$query = "CALL SP_GetAllParadas";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		// check for empty result
		if (mysqli_num_rows($result) > 0) 
		{
			$response["Paradas"] = array();
		 
			while ($row = mysqli_fetch_array($result)) 
			{
				// temp user array
				$parada = array();
				$parada ["Descripcion"] = $row["Descripcion"];
				$parada["Tarifa"] = $row["Tarifa"];
				$parada["Informacion"] = $row["Informacion"];
				$parada["Latitud"] = $row["Platitud"];
				$parada["Longitud"] = $row["Plongitud"];
				
				// guarda el nombre de las paradas en el arreglo
				array_push($response["Paradas"], $parada);
			}
			// success
			$response["success"] = 1;
		} 
		else 
		{
			$response["success"] = 0;
			$response["message"] = "No se encontraron paradas";
		}
		cerrarConexion();
		return $response;
	}
	
?>