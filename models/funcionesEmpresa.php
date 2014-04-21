<?php
	require_once 'conexion.php';
	//------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
	function insertarEmpresaUsuario($NombreEmp,$tel,$user,$passw,$mail)
	{
		$response = 0;
		$conexion = abrirConexion();
		$query = "CALL SP_InsertarEmpxUser('$NombreEmp','$tel','$user','$passw','$mail')";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		$response = mysqli_insert_id();
		cerrarConexion();
		return $response;
	}
	 function obtenerlistaEmpresas()
	 {
		$response ="";
		$conexion = abrirConexion();
		$query = "CALL SP_ListaEmpresas";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$response .=" <option value='".$row['IdEmpresa']."'>".$row['Nombre']."</option>";
			}
		} 
		cerrarConexion();
		return $response;
	 }
	 
	 function obtenerdatosEmpresa($idempresa){
		$response ="";
		$conexion = abrirConexion();
		$query = "CALL SP_ObtenerDatos('$idempresa')";
		$result = mysqli_query($conexion,$query) or die(mysqli_error());
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$response .=$row['Nombre'].$row['Telefono'];
			}
		} 
		cerrarConexion();
		return $response;
	 }
	 
	 function actualizarEmpresa($idempresa,$nombre,$tel)
	 {
		$conexion = abrirConexion();
		$query = "CALL SP_ActualizarEmpresa('$idempresa','$nombre','$tel')";
		$result = mysqli_query($conexion,$query);
		cerrarConexion();
		return $result;
	 }
?>