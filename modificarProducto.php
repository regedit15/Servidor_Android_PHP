<?php include ('functions.php');

$id=$_GET['id'];
$nombre=$_GET['nombre'];
$precio=$_GET['precio'];

ejecutarSQLCommand("UPDATE prueba.productos SET nombre = $nombre, precio = $precio WHERE  id = $id");

 ?>

