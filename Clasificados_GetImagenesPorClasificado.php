<?php

	include ('Clasificados_FuncionesSQL.php');

	$id_clasificado=$_GET['id_clasificado'];

   obtenerSelect("SELECT * FROM  clasificados.imagenes where id_clasificado = '$id_clasificado'"); 

?>

