<?php 

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();
	
	$id=$_GET['id'];

	ejecutarConsulta("DELETE FROM clasificados.imagenes WHERE id = '$id';");
	//http://localhost/prueba/Clasificados_EliminarImagenesPorClasificado.php?id_clasificado=49
 ?>
