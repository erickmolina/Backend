<?php
	require_once 'conexion.php';

	//------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
	function obtenerHorario($Nombre_Ruta)
	{
		$response = array();
		$conexion = abrirConexion();
		$query = "CALL SP_HorarioxRuta('$Nombre_Ruta')";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		// check for empty result
		if (mysqli_num_rows($result) > 0) {
			$response["Horarios"] = array();
		 
			while ($row = mysqli_fetch_array($result)) {
				// temp user array
				$horario = array();
				$horario["Dias"] = $row["Dias"];
				$horario["HoraSalida"] = $row["HoraSalida"];
				$horario["Tarifa"] = $row["Tarifa"];
				
				// guarda el horario en el arreglo
				array_push($response["Horarios"], $horario);
			}
			// success
			$response["success"] = 1;
		} 
		else 
		{
			$response["success"] = 0;
			$response["message"] = "No se encontraron horarios";
		}
		cerrarConexion();
		return $response;
	}
?>