<?php

include ('Clasificados_FuncionesSQL.php');

$usuario=$_GET['usuario'];
$md5=$_GET['md5'];

$resultado = obtenerUnSelect("SELECT md5 FROM clasificados.usuario WHERE usuario = '$usuario'", "md5");

if($resultado == $md5)
{
	ejecutarConsulta("UPDATE clasificados.usuario SET activado = 1 WHERE usuario = '$usuario'");
	echo "<br><br><br><center><h1>Su cuenta ya esta activada!!!</h1></center>";
}
else
{
	echo "No coinciden los has";
}

?> 
