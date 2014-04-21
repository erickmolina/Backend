<?php
	require_once '../models/funcionesGeneral.php';
	include 'sesion.php';
	
	if(isset($_POST['usuario']) && isset($_POST['clave']) && isset($_POST['opcion']))
	{
		if($_POST['opcion'] =="userEmp")
		{
			$uid = loginempresa($_POST['usuario'],$_POST['clave']);
			if($uid != 0)
			{
				$_SESSION['uid'] = $uid;
				header('Location: ../views/indexEmpresa.php');
			}
			else
			{
				header('Location: ../views/login.php');
			}
		}
		else if($_POST['opcion'] =="userAdmin")
		{
			$idEmpresa = loginadmin($_POST['usuario'],$_POST['clave']);
			$uid = 4;
			if($idEmpresa != 0){
				$_SESSION['idEmpresa'] =$idEmpresa;
				$_SESSION['uid'] = $uid;
				header('Location: ../views/indexAdmin.php');
			}
			else
			{
				
				header('Location: ../views/login.php');
			}
		}
		else
		{
			header('Location: ../views/login.php');
		}
	}
	else
	{
		echo "Faltan Parametros";
	}
?>