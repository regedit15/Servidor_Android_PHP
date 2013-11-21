<?php 

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();
	
	$id=$_GET['id'];
	$nombre=$_GET['nombre'];

	ejecutarConsulta("UPDATE clasificados.categoria SET nombre = '$nombre' WHERE id = '$id';");
	
?>

