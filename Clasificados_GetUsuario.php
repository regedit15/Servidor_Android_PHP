<?php

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();

	$usuario=$_GET['usuario'];

    obtenerSelect("SELECT id, usuario, password, admin FROM  clasificados.usuario where usuario='$usuario'"); 

?>

