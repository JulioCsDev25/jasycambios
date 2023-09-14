<?php
    error_reporting(-1);
	ini_set("display_errors", -1);

    define ('VAR_DB', 'jasy_site'); 
    define ('VAR_USERDB', 'd9e3k4d3_site'); //LOCAL
    define ('VAR_PASSDB', 'fRn5Ph~pN-hw'); //LOCAL
    define ('VAR_HOST', '192.168.95.167'); //LOCAL 
	

    $VAR_DB='jasy_site'; 
    $VAR_USERDB= 'd9e3k4d3_site'; //LOCAL
    $VAR_PASSDB='fRn5Ph~pN-hw'; //LOCAL
    $VAR_HOST='192.168.95.167'; //LOCAL
    
    /*define ('VAR_DB', 'jasy_site'); 
    define ('VAR_USERDB', 'root'); //LOCAL
    define ('VAR_PASSDB', ''); //LOCAL
    define ('VAR_HOST', 'localhost'); //LOCAL 

    $VAR_DB='jasy_site'; 
    $VAR_USERDB= 'root'; //LOCAL
    $VAR_PASSDB=''; //LOCAL
    $VAR_HOST='localhost'; //LOCAL */

    $_POST=addslashes__recursive($_POST);
	$_GET=addslashes__recursive($_GET);
	$_REQUEST=addslashes__recursive($_REQUEST);
	$_SERVER=addslashes__recursive($_SERVER);
	$_COOKIE=addslashes__recursive($_COOKIE);
	
	function addslashes__recursive($var){
		if (!is_array($var))
			return addslashes($var);
		$new_var = array();
		foreach ($var as $k => $v)
			$new_var[addslashes($k)]=addslashes__recursive($v);
		return $new_var;
	}
?>
