<?php
$con=mysqli_connect("localhost","mooite_gnumux","engranaje","mooite_2012");
if (mysqli_connect_errno())
{
	echo "Error en la conexión: " . mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
?>