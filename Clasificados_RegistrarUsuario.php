<?php 

include ('Clasificados_FuncionesSQL.php');

$usuario=$_GET['usuario'];
$password=$_GET['password'];
$correo=$_GET['correo'];

$md5 = substr( md5(microtime()),0, 32);

ejecutarConsulta("INSERT INTO  `clasificados`.`usuario` (`usuario`, `password`, `correo`, `md5`) VALUES ('$usuario', '$password', '$correo', '$md5');");

enviarCorreo($correo, "Registro", "<a href=http://localhost/prueba/Clasificados_ActivarUsuario.php?usuario=$usuario&md5=$md5>Para activar su cuenta haga click aqui</a>")

// http://localhost/prueba/Clasificados_RegistrarUsuario.php?usuario=martincho&password=123456&correo=martinrossi9009@gmail.com
 ?>
