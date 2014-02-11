<?php

	class login {
			private $dbconn;
		public function __construct($username, $password){

			require("lib/sql.class.php");
			require("config.php");
			
				
			$dbconn = new sql($config['db'], $config['debug']);	
			$dbconn->login($username, $password);
			
		}

	}
	
	
	class register {
			private $dbconn;
		public function __construct($username, $password) {
			
			require("lib/sql.class.php");
			require("config.php");
			
			
			$dbconn = new sql($config['db'], $config['debug']);	
			$dbconn->register($username, $password);
			
			
		}
	}




?>