<?php

	// include('functions.php'); 

	$usuario=$_GET['usuario'];

	// if ($resultset = getSQLResultSet("SELECT count(id) FROM  `clasificados`.`usuario` where usuario like '$usuario'")) 
	// {	
 //    	if($row = $resultset->fetch_array(MYSQLI_NUM)) 
 //    	{
 //    		echo json_encode($row);    	
 //    	}    	
 //   }  

	include ('Clasificados_FuncionesSQL.php');

	obtenerSelect("SELECT count(id) as respuesta FROM  `clasificados`.`usuario` where usuario like '$usuario'");

?>

