<?php include ('functions.php');

/*M: propiedades: */
$nombre=$_GET['nombre'];
$precio=$_GET['precio'];


ejecutarSQLCommand("INSERT INTO  `prueba`.`productos` (
`nombre` ,
`precio`
)
VALUES (
'$nombre' ,
'$precio');");

 ?>
