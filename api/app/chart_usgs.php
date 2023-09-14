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
      $sql = $dbConn->prepare("SELECT DISTINCT DATE_FORMAT(`fecha`,'%d/%m/%Y') AS niceDate, `p_compra`, `p_venta`, `id_moneda`,`id_sucursal` FROM `cotizacion` WHERE `id_sucursal` = 1 and `id_moneda` = 1 and fecha BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() ORDER BY `cotizacion`.`fecha` DESC");
      $sql->execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll());
      exit();
	
}


//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

?>