<?php
include "config.php";
include "utils.php";

$dbConn =  connect($db);

/*
  listar todos los posts o solo uno
 */



if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
   
      //Mostrar lista de post
      $sql = $dbConn->prepare("SELECT SUCURSAL AS ID_SUC, DETALLE_SUCURSAL AS NOMBRE, CONCAT ('https://www.yrendague.com.py/images/sucursales/', IMAGEN) as IMG, LATITUD, LONGITUD, DIRECCION, TELEFONO, CIUDAD, HORARIOS, TELEFONO_APP  FROM sucursales WHERE MOSTRAR = 'SI'");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll());
      exit();
	
}


//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

?>