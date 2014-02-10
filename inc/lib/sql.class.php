<?php
class sql{

		private $user;
		private $pass;
		private $dbdsn;
			var $dbconn;
		private $debug;

		public function __construct($settings, $debug){
		
			$this->dbdsn = "%s:dbname=%s;host=%s;charset=%s;";
			$this->dbdsn = sprintf($this->dbdsn,$settings['dbtype'],$settings['dbname'],$settings['dbhost'], $settings['charset']);
			
			$this->user = $settings['user'];
			$this->pass = $settings['pass'];
		
		    $this->dbconn = new PDO($this->dbdsn, $this->user, $this->pass);
			$this->dbconn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			
			$this->debug = $debug;
			
						if ($this->debug){
						
								$this->dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						
						}
			

		}





}














?>