<?php

class mysql_class{
	var $tabla;
	var $campos;
	var $values;
	var $joins;
	var $where;
	var $limit;
	var $joinType;
	var $debug=false;
	var $dB;
	var $esquema;
	var $lastInsertId;
	
	function creaDiccionario(){
		$datos=$this->extraer("SHOW TABLES");
		$campoT="Tables_in_".strtolower($this->dB);
		foreach($datos as $tbl){
			$fields=$this->extraer("DESCRIBE ".$tbl[$campoT]);
			foreach($fields as $fld){
				$esquema[$tbl[$campoT]][$fld['Field']]=$fld['Type'];
			}
		}
		echo "<pre>";
		print_r($esquema);
		echo "</pre>";
	}
	
	
	function whereIF($campo,$tabla=NULL){
		$i=0;
		foreach($campo as $c => $v){
			if ($i==0){
				$where ="$c='$v'";
			}else{
				$where .=" $c='$v'";				
			}
			$i=$i+1;
		}
		//echo $where;
		if ($tabla==NULL){
			$tabla=$this->tabla;
		}
		
		return $this->extraerDato("SELECT IF(count(*)=0,0,1) as result FROM $tabla WHERE $where");
		//$db->campos=array('idusuario','nombre','apellido');
		//$this->debug=true;
		//$this->where[0]=array('','idusuario','1');
		//$this->where[1]=array('AND','fecha','#MES#');
		//$this->creaSql();
	}

	function creaSql($option){
		$tabla=$this->tabla;
		$campos=$this->campos;
		$values=$this->values;
		$joins=$this->joins;
		$where=$this->where;
		$limit=$this->limit;
		if ($limit<>''){
			$limit="LIMIT $limit";
		}
		
		switch($option){
			case 'insert':
				$campos=implode(",",$campos);
				$values=implode("','",$values);
				$sql="INSERT INTO $tabla ($campos) VALUES ('$values')";
			break;
			case 'update':
				$i=0;
				foreach($campos as $cp){
					if ($i==0){
						$sql="UPDATE $tabla set $cp='$values[$i]'";
					}else{
						$sql .=",$cp='$values[$i]'";
					}
					$i=$i+1;
				}
				$whereIn=$this->fxWhere($where);
				$sql ="$sql $whereIn";
			break;
			case 'delete':
				$campos=implode(",",$campos);
				$values=implode("','",$values);
				$sql="DELETE FROM $tabla where $campos";
			break;
			default:
				$campos=implode(",",$campos);
				$values=implode("','",$values);
				foreach ($joins as $jt){
					if ($jt[4]<>''){
						$tablaJ=$jt[4];
					}else{
						$tablaJ=$tabla;
					}
					if ($jt[3]==''){
						$jt[3]=$jt[2];
					}
					$joinTable .= $jt[0]." JOIN ".$jt[1]." on $tablaJ.".$jt[2]."=$tabla.".$jt[3]." ";
				}
				$whereIn=$this->fxWhere($where);
				$sql="SELECT $campos FROM $tabla $joinTable $whereIn $limit";
		}
		if ($this->debug){
			echo $sql;
		}else{
			echo $sql="EJECUTA SQL";
		}
		return true;
	}
	
	function fxWhere($where){
		$i=0;
		foreach ($where as $wh){
			if ($i==0){
				$whereIn =" WHERE ";
			}else{
				$whereIn =$whereIn." ".$wh[0]." ";
			}
			switch($wh[3]){
				case 'IN':
					$whereIn .= $wh[1]." in ('".$wh[2]."')";
				break;
				case 'NOT IN':
					$whereIn .= $wh[1]." not in ('".$wh[2]."')";
				break;
				default:
					$whereIn .= $this->fxSql($wh[1],$wh[2]);
			}
			$i=$i+1;
		}
		
		return $whereIn;
			
	}
	
	function fxSql($opt,$valor){
		switch($valor){
			case '#HOY#':
				$whereIn = "date($opt)=date(now())";
			break;
			case '#MES#':
				$whereIn = "(year($opt)=year(now()) and month($opt)=month(now()))";
			break;
			default:
				$whereIn .= $opt."='".$valor."'";
		}
		
		return $whereIn;
	}
	
	
	
	//----------------//--------------------//---------------------//--------------------//---------
	

	/*
	*	CONECTA A LA BASE DE DATOS Y DEVUELVE TRUE O FALSE
	*/	
	function connDb($database,$user,$pass,$host){
	
	   $this->dB=$database;
	   
	   if (!($linkvar=mysqli_connect($host,$user,$pass))){
		  if ($linkvar=mysqli_connect($host,$user,$pass)){
		  	  $_SESSION["linkdb"]=$linkvar;
			  @mysqli_query("SET NAMES 'utf8'");
		  }else{
		  	  exit;
		  }
		 //$error=mysqli_error($linkvar);
		 //errorLog("mysql",$error);
		 //echo "Estamos realizando tareas de mantenimiento intente mas tarde disculpe las molestias";
	   }else{
	   		//define(LINK_IDENT,$linkvar);
			//echo $linkvar;
			$_SESSION["linkdb"]=$linkvar;
			@mysqli_query("SET NAMES 'utf8'");
			
	   }
	   	   
	   if (!mysqli_select_db($_SESSION["linkdb"], $database)){
	 	  $error=mysqli_error(LINK_IDENT);
		 // SonusLog::errorLog("mysql",$error);
		  echo "Error seleccionando la base de datos $database.";
		  exit();
	   }else{
		  return true;
	   }
	}
	
	function ejecutar($SQLtext,$register=false){
		if ($SQLtext){
			$tmp = mysqli_query($_SESSION["linkdb"], $SQLtext);
			if (!$tmp){
				//escribir("La consulta no se ejecuto [ $SQLtext ]");
				$error = mysqli_error($_SESSION["linkdb"]);
				return false;
			}else{
				$error="ejecutar $SQLtext".mysqli_error($_SESSION["linkdb"]);
				//SonusLog::errorLog("mysql",$error);
				
				/*if ($this->showsql==true){
					echo "<b>ejecutar</b> ".$SQLtext."<BR><BR>";
				}*/
				$this->lastInsertId = mysqli_insert_id($_SESSION["linkdb"]);
				return true;
			}
		}
		//mysqli_free_result($result);
	}

	/**
	 * Devuelve un array de datos.
	 * 
	 * @return array Devuelve un array si tiene exito, false si falla.
	 */
	public function extraer($sql) {
	
			/*if ($_SESSION['debug']==1){
				$this->debug=true;
			}
			
			if ($_SESSION['showsql']==1){
				$this->showsql=true;
			}*/
			//echo "<br><br><b>extraer: $sql</b><br><br>";
			//$this->ejecutar("SET time_zone = '-8:00'");
			//SonusLog::errorLog("sql2user",$sql);
            $datos = false;
            $result = mysqli_query($_SESSION["linkdb"], $sql);
            if ($result) {
                while ($dato = mysqli_fetch_assoc($result)) {
                    $datos[] = $dato; 
					
                }
            }else{
				$error="extraer ".mysqli_error($_SESSION["linkdb"]);
				//SonusLog::errorLog("mysql",$error);
				return false;
			}
			mysqli_free_result($result);
            return $datos;
        }
        
	function extraerDato($SQLtext){
		//echo "<br><br><b>extraerDato: $SQLtext</b><br><br>";
		//DEVUELVE UN DATO A UNA VARIABLE COMUN
		//COMPRUEBA SI SE ENVIARON DATOS Y SI LA CONSULTA ES VALIDA SY DEVUELVE FALSE
		
		if ($_SESSION['debug']==1){
			$this->debug=true;
		}
		
		if ($_SESSION['showsql']==1){
			$this->showsql=true;
		}
		
		if ($SQLtext){
			//SonusLog::errorLog("sql2user",$sql);
		
			$tmp = mysqli_query($_SESSION["linkdb"], $SQLtext);
			if (@mysqil_num_rows($tmp)<>0){
				$row = mysqli_result($tmp,0);
				if ($this->debug==true or $this->showsql==true){
					echo "<b>extraerDato</b> ".$SQLtext." <b> RESULTADO=$row</B><BR><BR>";
				}
				mysqli_free_result($tmp);
				
				return $row;
			}else{
				$error="ejecutar ".mysqli_error($_SESSION["linkdb"]);
				//SonusLog::errorLog("mysql",$error);
				//mysqli_free_result($tmp);
				return false;
			}
			
		}
	}
	
	function cdecimalSave($cantidad){
		//CORRIJE DECIMALES
		$cantidad=str_replace(".","",$cantidad);
		$cantidad=str_replace(",",".",$cantidad);
		return $cantidad;
	}

	function formatea_fecha($fecha){
		//FORMATEA LA FECHA GRABARLA EN LA BASE
		if ($fecha){
		$fecha=str_replace("-","/",$fecha);
		if (ereg("([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})", $fecha, $mifecha)) {
    	$lafecha=$mifecha[3]."-".$mifecha[2]."-".$mifecha[1];
	    return $lafecha;}else{
		return false;}
		}else{return false;}
	}
	
}

?>