<?php
require("../../../boot/dbconfig.php");

	class Dns{
		public $dns = array (
			"conexion1" => array (
				"dbhost" => VAR_HOST,
				"db"     => VAR_DB,
				"dbuser" => VAR_USERDB,
				"dbpass" => VAR_PASSDB,
				"type" => "mysql"
			)
		);
		public function getDNS($db) {
			return $this->dns[$db];
		}
	}

?>