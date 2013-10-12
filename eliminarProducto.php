<?php include ('functions.php');

$id=$_GET['id'];

ejecutarSQLCommand("DELETE FROM `prueba`.`productos` WHERE id = $id;");

 ?>

