<?php
	
	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();

	$id=$_GET['id'];

    obtenerSelect("SELECT * FROM  clasificados.categoria where id = '$id'"); 
?>

