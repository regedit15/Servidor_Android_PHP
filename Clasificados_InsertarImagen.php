<?php 

	include ('Clasificados_FuncionesSQL.php');

	$id_clasificado=$_GET['id_clasificado'];
	$nombre=$_GET['nombre'];

	insertReturnId("INSERT INTO  clasificados.imagenes (`id_clasificado`, `nombre`) VALUES ('$id_clasificado', '$nombre');");
	
	//http://localhost/prueba/Clasificados_InsertarnombreImagen.php?id_clasificado=aaa&nombre=aaa

 ?>
