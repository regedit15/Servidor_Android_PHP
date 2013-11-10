<?php

	include ('Clasificados_FuncionesSQL.php');

	$usuario=$_GET['usuario'];
	$password=$_GET['password'];

	validarUsuario($usuario,$password);
?>

