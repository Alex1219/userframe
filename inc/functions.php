<?php




		function encrypt($string){

			require("config.php");	

			
				//crypt string with basic DES with our static private hash
				$hash = crypt($string,$config['hash']);
				
				
				//generate sha1 hash from DES crypt
				$hash = hash("sha1",$hash );
				
				
				//Convert sha1 hash into base64
				$salt = base64_encode($hash);
				//add a random salt at the end of our user input salt
				$salt = $salt . strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
				
				//crypt with base64 as salt with blowfish alogrithm with static hash as our salt
				$hash = crypt($salt . $string ,"$2a$" . $hash);
				
				
				//return a md5 hash on top of a sha1 hash sha1 hash with our static salt
				return md5(sha1($hash, $config['salt']));
						


		}







?>