<?php

include('functions.php');

$host="localhost"; //replace with database hostname 
$username="root"; //replace with database username 
$password=""; //replace with database password 
$db_name="prueba"; //replace with database name



$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 

$sql = "SELECT * FROM  `prueba`.`productos`"; 
$result = mysql_query($sql);
$json = array();
 
if(mysql_num_rows($result))
{
	while($row = mysql_fetch_assoc($result))
	{
		$json['lista_productos'][]=$row;
	}
}
mysql_close($con);
echo json_encode($json); 



?> 
