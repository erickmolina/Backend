<?php
	require_once '../models/funcionesGeneral.php';
	include 'sesion.php';
	
	if(isset($_POST['usuario']) && isset($_POST['clave']) && isset($_POST['opcion']))
	{
		if($_POST['opcion'] =="userEmp")
		{
			$idEmpresa = loginempresa($_POST['usuario'],$_POST['clave']);
			if($idEmpresa  != 0)
			{
				$_SESSION['idEmpresa'] =$idEmpresa;
				echo "2";
			}
			else
			{
				echo "0";
			}
		}
		else if($_POST['opcion'] =="userAdmin")
		{
			$uid= loginadmin($_POST['usuario'],$_POST['clave']);
			if($uid != 0){
				$_SESSION['uid'] = $uid;
				echo "1";
			}
			else
			{
				echo "0";
			}
		}
		else
		{
			echo "-5";
		}
	}
	else
	{
		echo "-1";
	}
?>