<?php

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();
	
	$usuario=$_GET['usuario'];

	validarNombreUsuario($usuario);
?>

