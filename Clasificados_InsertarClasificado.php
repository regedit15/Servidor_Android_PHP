<?php 

	include ('Clasificados_FuncionesSQL.php');
	abrirConexion();
	
	$id_usuario=$_GET['id_usuario'];
	$titulo=$_GET['titulo'];
	$descripcion=$_GET['descripcion'];
	$precio=$_GET['precio'];
	$id_categoria=$_GET['id_categoria'];

	insertReturnId("INSERT INTO clasificados.clasificado (`id_usuario`, `titulo`, `descripcion`, `precio`, `id_categoria`) VALUES ('$id_usuario', '$titulo', '$descripcion', '$precio', '$id_categoria');");


	// INSERT INTO  clasificados.clasificado (`id_usuario`, `titulo`, `descripcion`, `precio`, `imagen`, `categoria`) VALUES ('55', 'aaaa', 'aaaa', '$precio', '$imagen', '$categoria');

	// http://10.0.0.3/prueba/Clasificados_InsertarClasificado.php?id_usuario=55&titulo=rrrr&descripcion=gggg&precio=555.0&imagen=null&categoria=com.example.clasificados3.Clases.Categoria@406628e8
	//http://localhost/prueba/Clasificados_InsertarClasificado.php?titulo=titulo&descripcion=descripcion&precio=22.5&imagen=imagen&categoria=1

	//prueba/Clasificados_InsertarClasificado.php?id_usuario=1&titulo=aaa&descripcion=aaa&precio=22.5&id_categoria=1
 ?>
