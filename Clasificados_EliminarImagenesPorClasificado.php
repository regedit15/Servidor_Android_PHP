<?php 

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();
	
	$id_clasificado=$_GET['id_clasificado'];

	ejecutarConsulta("DELETE FROM clasificados.imagenes WHERE id_clasificado = '$id_clasificado';");
	//http://localhost/prueba/Clasificados_EliminarImagenesPorClasificado.php?id_clasificado=49
 ?>
