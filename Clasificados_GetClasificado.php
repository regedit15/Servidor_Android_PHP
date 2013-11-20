<?php

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();

	$id=$_GET['id'];

    obtenerSelect("SELECT * FROM  clasificados.clasificado WHERE id = '$id' ");

?>

