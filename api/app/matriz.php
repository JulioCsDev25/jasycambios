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
      $sql = $dbConn->prepare("SELECT MONEDA,COMPRA,VENTA,NOMBRE,SIMBOLOS,TIPO,COMPRA_ESTADO,VENTA_ESTADO,ULT_UDP, CONCAT('https://www.yrendague.com.py/images/',IMAGEN_MONEDA) as IMG FROM monedas");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll());
      exit();
	
}


//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

?>