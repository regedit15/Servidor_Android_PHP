<?php 

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();
	
	$nombre=$_GET['nombre'];

	ejecutarConsulta("INSERT INTO clasificados.categoria (`nombre`) VALUES ('$nombre');");

 ?>
