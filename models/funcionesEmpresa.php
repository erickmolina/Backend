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
	
	//------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
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
	 
	 //------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
	 function actualizarEmpresa($idempresa,$nombre,$tel)
	 {
		$conexion = abrirConexion();
		$query = "CALL SP_ActualizarEmpresa('$idempresa','$nombre','$tel')";
		$result = mysqli_query($conexion,$query);
		cerrarConexion();
		return $result;
	 }
	 
	 //------------------------------------------------------------------------------------------------------------------
	/*
	* Descripcion:
	* Entradas:
	* Salidas:
	* Reestricciones:
	*/
	 function getDatosEmpresa($idempresa)
	 {
		$response = array();
		$conexion = abrirConexion();
		$query = "SELECT Nombre,Telefono FROM Empresa WHERE IdEmpresa = '$idempresa'";
		$result = mysqli_query($conexion,$query);
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$response["Nombre"] =  $row['Nombre'];
				$response["Telefono"] = $row['Telefono'];
			}
		}
		else
		{
			$response["Nombre"] =  "ND";
			$response["Telefono"] = "ND";
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
	 function verDatosEmpresas()
	 {
		$response = "<table border='1' align='center'>
					<tr bgcolor='#CCCCCC'>
					<td><b>Nombre de Empresa                    </b></td>
					<td><b>Telefono</b></td>
					</tr>";
		$conexion = abrirConexion();
		$query = "SELECT Nombre,Telefono FROM Empresa";
		$result = mysqli_query($conexion,$query);
		if (mysqli_num_rows($result) > 0) 
		{
			while ($row = mysqli_fetch_array($result)) 
			{
				$response .="<tr>
					<td>".$row[Nombre]."</td>
					<td>".$row[Telefono]."</td>
					</tr>";
			}
			$reponse.="</table>";
		}
		cerrarConexion();
		return $response;
	 }
	 
?>