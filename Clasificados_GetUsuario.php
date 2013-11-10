<?php

	include ('Clasificados_FuncionesSQL.php');

	$id=$_GET['id'];

   obtenerSelect("SELECT usuario FROM  clasificados.usuario where id='$id'"); 

?>

