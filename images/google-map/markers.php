<?php 
header('Content-Type: text/xml'); 
echo '<markers>';
include ("conexion.php");

$sql = mysqli_query($con,"SELECT * FROM reg");
while($row = mysqli_fetch_array($sql))
{
	echo "<marker id ='".$row['Id']."' lat='".$row['Lat']."' lng='".$row['Lng']. "' tit='".$row['titulo']."'>\n";
	echo "</marker>\n";
}

echo "</markers>\n";
?>