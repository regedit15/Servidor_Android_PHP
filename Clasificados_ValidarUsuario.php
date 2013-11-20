<?php

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();
	
	$usuario=$_GET['usuario'];
	$password=$_GET['password'];

	validarUsuario($usuario,$password);
?>

