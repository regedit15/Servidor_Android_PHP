<?php
	include('functions.php'); 

	$id=$_GET['id'];

	if ($resultset = getSQLResultSet("SELECT id, usuario, password, correo, md5, activado FROM  clasificados.productos where id='$id'")) 
	{	
    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) 
    	{
    		echo json_encode($row);    	
    	}    	
   }  

?>

