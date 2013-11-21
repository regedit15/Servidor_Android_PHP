<?php 

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();
	
	$id=$_GET['id'];
	$titulo=$_GET['titulo'];
	$descripcion=$_GET['descripcion'];
	$precio=$_GET['precio'];
	$id_categoria=$_GET['id_categoria'];

	ejecutarConsulta("UPDATE  clasificados.clasificado SET titulo = '$titulo', descripcion = '$descripcion', precio = '$precio', id_categoria = '$id_categoria'  WHERE  `clasificado`.`id` = '$id';");
	//localhost/prueba/Clasificados_ModificarClasificado.php?id=55&titulo=ttttttttt&descripcion=ddddddddddddd&precio=33333333&id_categoria=3
?>

