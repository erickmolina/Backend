<?php
	require_once '../models/funcionesEmpresa.php';
	include 'sesion.php';
	
	if(isset($_POST['empresa']) && isset($_POST['telefono']) && isset($_POST['usuario']) && isset($_POST['correo']) && isset($_POST['clave']))
	{
		$result = insertarEmpresaUsuario($_POST['empresa'],$_POST['telefono'],$_POST['usuario'],$_POST['clave'],$_POST['correo']);
		if(result== 0){
			header('Location: ../views/empresaAgregar.php');
		}
		else{
			echo "No se pudo insertar";
		}
	}
	else if(isset($_POST['listaempresa']) && isset($_POST['empresa']) && isset($_POST['telefono']))
	{
		$result = actualizarEmpresa($_POST['listaempresa'],$_POST['empresa'],$_POST['telefono']);
		if(result !=1)
		{
			header('Location: ../views/empresaEditar.php');
		}
		else
		{
			echo "No se pudo actualizar";
		}
	}
	else
	{
		echo "Faltan Parametros";
	}
	
	function listaEmpresas()
	{
		$result = obtenerlistaEmpresas();
		return $result;
	}
	
	function cargarDatosEmpresa($idempresa)
	{
		$result = obtenerdatosEmpresa($idempresa);
		return $result;
	}
?>