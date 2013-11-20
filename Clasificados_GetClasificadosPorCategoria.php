<?php

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();

	$id_categoria=$_GET['id_categoria'];
	
    obtenerSelect("SELECT * FROM clasificados.clasificado WHERE id_categoria = 'id_categoria';"); 

?>

