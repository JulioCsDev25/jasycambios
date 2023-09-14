<?php
include('boot/dbconfig.php');
include_once('boot/mysql.php');
$db = new mysql_class();
$db->connDb($VAR_DB, $VAR_USERDB, $VAR_PASSDB, $VAR_HOST);

function get_cotizaciones($db) {
    header('Content-Type: application/json');
    $idmoneda=$_POST['idmoneda'];
    $fecha_actual = date("Y-m-d");
    $fecha = date("Y-m-d",strtotime($fecha_actual."- 7 days")); 
    $filtros="";
    if($_POST['fecha_desde']!=''){
        $fecha = $_POST['fecha_desde'];
        $arr = explode("/", $fecha);
        $fecha = $arr[2]."-".$arr[1]."-".$arr[0];
        $filtros.=" AND fecha>='".$fecha." 00:00:00' ";
    }
    if($_POST['fecha_hasta']!=''){
        $fecha = $_POST['fecha_hasta'];
        $arr = explode("/", $fecha);
        $fecha = $arr[2]."-".$arr[1]."-".$arr[0];
        $filtros.=" AND fecha<='".$fecha." 23:59:59' ";
    }
    
    if($filtros==''){
        $filtros=" AND fecha > '$fecha 00:00:00' ";
    }
    if($idmoneda<5){
        $sql="  SELECT 
                    * 
                FROM cotizacion
                WHERE 
                    id_moneda='$idmoneda'
                    AND id_sucursal=1
                    $filtros
                GROUP BY DAY(fecha) ORDER BY fecha
            ";
    }else{
        $sql="  SELECT 
                    * 
                FROM arbitraje
                WHERE                 
                    id_moneda='$idmoneda'
                    AND id_sucursal=1
                    $filtros
                GROUP BY DAY(fecha) ORDER BY fecha
            ";
    }
    $datos = $db->extraer($sql);        
    
	$jsondata = array();
	$jsondata['success']=true;
	$jsondata['datos']=$datos;	
	$jsondata['sql']=$sql;
	echo json_encode($jsondata);
}

call_user_func($_REQUEST['action'], $db);
?>