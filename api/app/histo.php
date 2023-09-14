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
      $sql = $dbConn->prepare("SELECT monedas.SIMBOLOS, DATE_FORMAT(`fecha`,'%d/%m/%Y') AS FechaHora, `p_compra`, `p_venta` FROM `cotizacion` INNER JOIN monedas ON monedas.MONEDA=cotizacion.id_moneda WHERE `id_sucursal`=1 and `id_moneda`=:id_mo and (fecha >= DATE_SUB(CURDATE(), INTERVAL :id_da DAY)) GROUP BY FechaHora HAVING COUNT(*) > 1 ORDER BY fecha DESC");
      $sql->execute(array(":id_mo" => $_GET['id_mo'], ":id_da" => $_GET['id_da']));
      $sql->execute(); 
      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll());
      exit();
	
}


//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

?>