<?php
	include_once 'config.php';
	
	function abrirConexion()
	{
		$conexion1 = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME, DB_PORT,DB_SOCKET); 
		if(!$conexion1)
		{ 
			die("Fallo al conectar con mysql ".mysqli_error());
		}
		return $conexion1;
	}
	
	function cerrarConexion()
	{
		mysqli_close();
	}
?>
