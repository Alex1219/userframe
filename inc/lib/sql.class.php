<?php

/*
    userframe - enduser framework
    Copyright (C) 2014 undido

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

class sql{

		private $user;
		private $pass;
		private $dbdsn;
			var $dbconn;
		private $debug;

		public function __construct($settings, $debug = false){
		
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
		
		
		public function login($username, $password){
		
		
			$query = $this->dbconn->prepare("SELECT username,password FROM `users` WHERE LOWER(`username`) = LOWER(:username) AND `password` = :password");
				$query->bindValue(':username', $username, PDO::PARAM_STR);
				$query->bindValue(':password', $password, PDO::PARAM_STR);
					$query->execute();
					
					
				
					

					
				
					
					if ( $query->rowCount() != false){

					print_r("login successful");
					
					}
		
		
		
		
		}
		
		
		
				public function register($username, $password,$email){
		
		
		//check if username exists already
			$query = $this->dbconn->prepare("SELECT username FROM `users` WHERE LOWER(`username`) = LOWER(:username)");
				$query->bindValue(':username', $username, PDO::PARAM_STR);
					$query->execute();
					
					
			
				
					//if username not found create new entry into database!
					if ( $query->rowCount() == false){
						
					$query = "";
					$query = $this->dbconn->prepare("INSERT INTO `users` VALUES (:username, :password,:email)");
					$query->bindValue(':username', $username, PDO::PARAM_STR);
					$query->bindValue(':password', $password, PDO::PARAM_STR);
					$query->bindValue(':password', $email, PDO::PARAM_STR);
					$query->execute(); 
					
					
					
					}
		
		
		
		
		}





}














?>
