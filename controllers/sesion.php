<?php
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
session_start();

function check_login(){
    if (!isset ($_SESSION['uid']) || !$_SESSION['uid']) {
    /* Si la cookie no esta definida se redirige a la pagina login */
    header('Location: ../views/login.php');
	}
}
function check_loginEmpresa(){
	if ( !isset ($_SESSION['idEmpresa']) || !$_SESSION['idEmpresa'] ) {
    /* Si la cookie no esta definida se redirige a la pagina login */
    header('Location: ../views/login.php');
	}
}
?>