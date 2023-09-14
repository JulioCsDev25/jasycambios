<?php
include "config.php";
include "utils.php";

$dbConn =  connect($db);
$dbConn2 =  connect2($db2);
/*
  Obtiene los detalles de la transferencia
 */

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{  
    

    // Actualiza DOLAR
      $sql2 = $dbConn->prepare("SELECT mo_czcpa, mo_czvta FROM moneda where id_moneda=13 ");
      $sql2->execute();
      $cliente = $sql2->fetchAll();
  	  $cliente=$cliente[0];    
     
      $stmt = $dbConn2->prepare("UPDATE moneda_encar SET compra=:compra, venta=:venta where moneda=:moneda");
      $stmt->bindParam(':compra', $compra);
      $stmt->bindParam(':venta', $venta);
      $stmt->bindParam(':moneda', $moneda);
      // UPDATE one row
      $compra = $cliente['mo_czcpa'];
      $venta = $cliente['mo_czvta'];
      $moneda = 1;
      $stmt->execute();


      // Actualiza REAL
      $sql2 = $dbConn->prepare("SELECT mo_czcpa, mo_czvta FROM moneda where id_moneda=14 ");
      $sql2->execute();
      $cliente = $sql2->fetchAll();
      $cliente=$cliente[0];    
   
      $stmt = $dbConn2->prepare("UPDATE moneda_encar SET compra=:compra, venta=:venta where moneda=:moneda");
      $stmt->bindParam(':compra', $compra);
      $stmt->bindParam(':venta', $venta);
      $stmt->bindParam(':moneda', $moneda);
      // UPDATE one row
      $compra = $cliente['mo_czcpa'];
      $venta = $cliente['mo_czvta'];
      $moneda = 2;
      $stmt->execute();


      // Actualiza PESO
      $sql2 = $dbConn->prepare("SELECT mo_czcpa, mo_czvta FROM moneda where id_moneda=15 ");
      $sql2->execute();
      $cliente = $sql2->fetchAll();
      $cliente=$cliente[0];    
   
      $stmt = $dbConn2->prepare("UPDATE moneda_encar SET compra=:compra, venta=:venta where moneda=:moneda");
      $stmt->bindParam(':compra', $compra);
      $stmt->bindParam(':venta', $venta);
      $stmt->bindParam(':moneda', $moneda);
      // UPDATE one row
      $compra = $cliente['mo_czcpa'];
      $venta = $cliente['mo_czvta'];
      $moneda = 3;
      $stmt->execute();

      // Actualiza EURO
      $sql2 = $dbConn->prepare("SELECT mo_czcpa, mo_czvta FROM moneda where id_moneda=16 ");
      $sql2->execute();
      $cliente = $sql2->fetchAll();
      $cliente=$cliente[0];    
   
      $stmt = $dbConn2->prepare("UPDATE moneda_encar SET compra=:compra, venta=:venta where moneda=:moneda");
      $stmt->bindParam(':compra', $compra);
      $stmt->bindParam(':venta', $venta);
      $stmt->bindParam(':moneda', $moneda);
      // UPDATE one row
      $compra = $cliente['mo_czcpa'];
      $venta = $cliente['mo_czvta'];
      $moneda = 4;
      $stmt->execute();


       // Actualiza REAL DOLAR
      $sql2 = $dbConn->prepare("SELECT mo_czcpa, mo_czvta FROM cotizarb where id_cotizarb=36");
      $sql2->execute();
      $cliente = $sql2->fetchAll();
      $cliente=$cliente[0];    
      $stmt = $dbConn2->prepare("UPDATE moneda_encar SET compra=:compra, venta=:venta where moneda=:moneda");
      $stmt->bindParam(':compra', $compra);
      $stmt->bindParam(':venta', $venta);
      $stmt->bindParam(':moneda', $moneda);
      // UPDATE one row
      $compra = $cliente['mo_czcpa'];
      $venta = $cliente['mo_czvta'];
      $moneda = 5;
      $stmt->execute();


       // Actualiza PESO - DOLAR
       $sql2 = $dbConn->prepare("SELECT mo_czcpa, mo_czvta FROM cotizarb where id_cotizarb=37");
       $sql2->execute();
       $cliente = $sql2->fetchAll();
       $cliente=$cliente[0];    
       $stmt = $dbConn2->prepare("UPDATE moneda_encar SET compra=:compra, venta=:venta where moneda=:moneda");
       $stmt->bindParam(':compra', $compra);
       $stmt->bindParam(':venta', $venta);
       $stmt->bindParam(':moneda', $moneda);
       // UPDATE one row
       $compra = $cliente['mo_czcpa'];
       $venta = $cliente['mo_czvta'];
       $moneda = 6;
       $stmt->execute();


        // Actualiza EURO - REAL
        $sql2 = $dbConn->prepare("SELECT mo_czcpa, mo_czvta FROM cotizarb where id_cotizarb=38");
        $sql2->execute();
        $cliente = $sql2->fetchAll();
        $cliente=$cliente[0];    
        $stmt = $dbConn2->prepare("UPDATE moneda_encar SET compra=:compra, venta=:venta where moneda=:moneda");
        $stmt->bindParam(':compra', $compra);
        $stmt->bindParam(':venta', $venta);
        $stmt->bindParam(':moneda', $moneda);
        // UPDATE one row
        $compra = $cliente['mo_czcpa'];
        $venta = $cliente['mo_czvta'];
        $moneda = 7;
        $stmt->execute();


       
        // Actualiza PESO - REAL
        $sql2 = $dbConn->prepare("SELECT mo_czcpa, mo_czvta FROM cotizarb where id_cotizarb=39");
        $sql2->execute();
        $cliente = $sql2->fetchAll();
        $cliente=$cliente[0];    
        $stmt = $dbConn2->prepare("UPDATE moneda_encar SET compra=:compra, venta=:venta where moneda=:moneda");
        $stmt->bindParam(':compra', $compra);
        $stmt->bindParam(':venta', $venta);
        $stmt->bindParam(':moneda', $moneda);
        // UPDATE one row
        $compra = $cliente['mo_czcpa'];
        $venta = $cliente['mo_czvta'];
        $moneda = 8;
        $stmt->execute();

       

        // Actualiza EURO - DOLAR
        $sql2 = $dbConn->prepare("SELECT mo_czcpa, mo_czvta FROM cotizarb where id_cotizarb=40");
        $sql2->execute();
        $cliente = $sql2->fetchAll();
        $cliente=$cliente[0];    
        $stmt = $dbConn2->prepare("UPDATE moneda_encar SET compra=:compra, venta=:venta where moneda=:moneda");
        $stmt->bindParam(':compra', $compra);
        $stmt->bindParam(':venta', $venta);
        $stmt->bindParam(':moneda', $moneda);
        // UPDATE one row
        $compra = $cliente['mo_czcpa'];
        $venta = $cliente['mo_czvta'];
        $moneda = 9;
        $stmt->execute();


   //   echo json_encode($trans);

      echo  "Actualización pizarra OK";
      

   
      
      // UPDATE another row with different values
         

        
  


 
    exit();
}
//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");
?>