<?php
	require_once '../models/funcionesEmpresa.php';
	include 'sesion.php';
	
	if(isset($_POST['empresa']) && isset($_POST['telefono']) && isset($_POST['usuario']) && isset($_POST['correo']) && isset($_POST['clave']))
	{
		$result = insertarEmpresaUsuario($_POST['empresa'],$_POST['telefono'],$_POST['usuario'],$_POST['clave'],$_POST['correo']);
		if($result== 0){
			echo "1";
		}
		else{
			echo "0";
		}
	}
	else if(isset($_POST['idempresa']) && isset($_POST['nombre_emp']) && isset($_POST['tel_emp']))
	{
		$result = actualizarEmpresa($_POST['idempresa'],$_POST['nombre_emp'],$_POST['tel_emp']);
		if($result ==1)
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
	}
	else if(isset($_GET['data']) && isset($_GET['idempresa']) )
	{
		$result = getDatosEmpresa($_GET['idempresa']);
		echo json_encode($result);
	}
	
	else if(isset($_GET['list']))
	{
		$result = obtenerlistaEmpresas();
		echo $result;
	}
	
	else if(isset($_GET['ver']))
	{
		$result = verDatosEmpresas();
		echo $result;
	}
	
	else
	{
		echo "-1";
	}
?>