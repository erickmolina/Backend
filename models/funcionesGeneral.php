<?php
	require_once 'conexion.php';
	//------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
	function loginadmin($usuario,$contrasena)
	{
		$response = 0;
		$conexion = abrirConexion();
		$query = "CALL SP_LoginSuperAdmin('$usuario','$contrasena')";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		if (mysqli_num_rows($result) > 0) 
		{
			$response = 1;
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
	function loginempresa($usuario,$contrasena)
	{
		$response = 0;
		$conexion = abrirConexion();
		$query = "CALL SP_LoginAdmin('$usuario','$contrasena')";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$response = $row["FK_Empresa"];
			}
		}
		cerrarConexion();
		return $response;
	}
?>