<?php
	require_once 'conexion.php';
	
	//------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
	function obtenerUnidadesRuta($Nombre_Ruta)
	{
		$response = array();
		$conexion = abrirConexion();
		$query = "CALL SP_UnidadesxRuta('$Nombre_Ruta')";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		// check for empty result
		if (mysqli_num_rows($result) > 0) 
		{
			$response["Unidades"] = array();
		 
			while ($row = mysqli_fetch_array($result)) 
			{
				// temp user array
				$unidad = array();
				$unidad["Identificador"] = $row["Identificador"];
				$unidad["Latitud"] = $row["ULatitud"];
				$unidad["Longitud"] = $row["ULongitud"];
				$unidad["Estado"] = $row["Estado"];
				
				// Guarda las unidades en el arreglo
				array_push($response["Unidades"],$unidad);
			}
			$response["success"] = 1;
		} 
		else 
		{
			$response["success"] = 0;
			$response["message"] = "No se encontraron unidades";
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
	function getAllUnidades()
	{
		$response = array();
		$conexion = abrirConexion();
		$query = "CALL SP_GetAllUnidades";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		// check for empty result
		if (mysqli_num_rows($result) > 0) 
		{
			$response["Unidades"] = array();
		 
			while ($row = mysqli_fetch_array($result)) 
			{
				// temp user array
				$unidad = array();
				$unidad["Descripcion"] = $row["Descripcion"];
				$unidad["Latitud"] = $row["ULatitud"];
				$unidad["Longitud"] = $row["ULongitud"];
				$unidad["Estado"] = $row["Estado"];
				
				// Guarda las unidades en el arreglo
				array_push($response["Unidades"],$unidad);
			}
			$response["success"] = 1;
		} 
		else 
		{
			$response["success"] = 0;
			$response["message"] = "No se encontraron unidades";
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
	function actualizarUbicacion($identifier,$latitud,$longitud ,$estado)
	{
		$response = array();
		$conexion = abrirConexion();
		
		$query = "CALL SP_ActualizarLLUnidad('$identifier','$latitud','$longitud','$estado')";
		$result = mysqli_query($conexion,$query);
		
		if ($result == 1) 
		{
			$response["success"] = 1;
			$response["message"] = "Ubicacion Actualizada.";
		} 
		else 
		{
			$response["success"] = 0;
			$response["message"] = "Error al actualizar";
		}
		cerrarConexion();
		return $response;
	}
?>