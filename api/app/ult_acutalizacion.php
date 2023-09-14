<?php
include "config.php";
include "utils.php";

$dbConn =  connect($db);


/*
  Obtiene los detalles de la transferencia
 */

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{  

 // Actualiza hora
      $sql2 = $dbConn->prepare("SELECT fecha FROM cotizacion where id=(select max(id) from cotizacion) ");
      $sql2->execute();
      $cliente = $sql2->fetchAll();
      $cliente=$cliente[0];    
   
 // echo json_encode($cliente);

      $stmt = $dbConn->prepare("UPDATE monedas SET ULT_UDP=:ULT_UDP");
          $stmt->bindParam(':ULT_UDP', $ult_udp);
      // UPDATE one row
      //echo $cliente['fecha'];

      $ult_udp = $cliente['fecha'];
      $stmt->execute();


   //   echo json_encode($trans);

      echo  "Actualización pizarra OK";

 
    exit();
}
//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");
?>