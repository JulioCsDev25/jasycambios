<?php
include "config.php";
include "utils.php";
$dbConn =  connect($db);
$dbConn2 =  connect($db2);
/*
  Obtiene los detalles de la transferencia
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{  
    
      //Mostrar un post
      $sql = $dbConn->prepare("
            SELECT
		('https://www.yrendague.com.py/images/logo_cuadro.jpg') as logo, 
                A.nro_op_entidad,
                A.id_op,
                A.nrocta_rtte,
                A.tipo_doc_rtte,
                A.nro_doc_rtte,
                A.id_trans_sofia,
                A.nro_op_entidad,
                A.cod_ent,
		A.fecha_in,
		A.moneda,
		A.valor_transf,
		A.swift,
		trim(A.nomb_bco_dest) as nomb_bco_dest,
		A.banco_direccion_dest,
		A.ciudad_bco_dest,
		A.pais_bco_dest,
		A.nro_cta_benef,
		A.nomb_benef,
		A.benef_direccion,
		A.ciudad_benef,
		A.pais_benef,
		A.rtte_info
            FROM transf_enviado A
            WHERE  A.id_trans_sofia=:id_sofia
        ");
    $sql->execute(array(":id_sofia" => $_GET['id_sofia']));
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    //header("HTTP/1.1 200 OK");
    header('Content-Type: application/json');
   
       

if ($sql->rowCount() > 0) {
	  $trans = $sql->fetchAll();
          $trans = $trans[0];    
          $nro_doc = $trans['nro_doc_rtte'];
          $trans['nro_doc_rtte2'] = substr($nro_doc,0,strlen($nro_doc)-1)."-".substr($nro_doc,strlen($nro_doc)-1, 1);
          $sql2 = $dbConn2->prepare("SELECT * FROM cliente WHERE cl_id = '".$trans['nro_doc_rtte2']."' ");
          $sql2->execute();
          $sql->setFetchMode(PDO::FETCH_ASSOC);
  	  $cliente = $sql2->fetchAll();
  	  $cliente=$cliente[0];    
   	  $trans['cliente'] = $cliente['cl_nomb'];
  	  $trans['direccion'] = $cliente['cl_dire'];
        
    echo json_encode($trans);

} else {
   echo 'Sin datos';
}

 
    exit();
}
//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");
?>