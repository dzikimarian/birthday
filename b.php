<?php 
	/**
	* This is simple birthday riddle.
	* 
	* Usage: php b.php & follow screen instructions.
	*/
	class Birthday {
		
		private $haxorControl = 
		[
			'intro' => '1ccf3562764751af48621529a4f00d1b6995a73cfae4b90572d5f4376b9f99b9',
			'letTheGamesBegin' => '5c390d5e07c44450e14038311d0521d37b3bfb2008dfd58494e7714923684865',
			'theSecond' => '86a5518268c6d50660ee6e9e0ed17d2a9958c1bf896bfcfc95079a3d87bcd515'
		];
		private $txtRes = [
			'intro' => 'kru8LLBr1XxwDzOrXZjZakc5YWMPRUkP0NIb4YEqSzQpE/mOL7PriJzAxGwIK4d6XIIpdv1Zd2F/XIgPUVx8/kzVL4zgbMvVUoTPeZawcKuZueXhUhauz1cwz2Oh1qQ6T8/auHz+YcAT7qJQRvi+WS8FgJSqG2LV8ZNpMzCKsHUaZDGn2zua56NpwftgrUjsxmkmtHzddyi/gyAfq+N62HBkezHuZXHo3FepJq33WPYQIa6CD+Ou9amZGzNHF0x8suAXjkIPcuj67XAdjku0oAdtHN4t5hqUnWtsPKWUn+HXhAag3eVz/+yHS8SpTdoACEykTHIwu4JyathnRmjCYEmmhCFT2yCLhjb3vR3iu80FIXZIImP8HppM8AWeOUvF9/FRQbEtv0L9fuzGY8qyTWWhBufUWXrFzWCDhpjf5cMm6F1F6Ngdxxrlj9UWN82CTf1IwdzExRWll6MtEr6RzwzhPf5qi+5aqxUFuV6bH6p8XJ/bZN4hIp+WdWydbnS2957debt0pt/2SeQT/zk10rvNd+oeDlyfaeF5/CRbNDWM2tebhSaYbBxd3WFwxmvz/NIdebLJ8b9PBTrzN7mu+/p5OCnIEhEM/OYO2WpRpFSdaelb5xR2NZLSqLQLBRGU1+8ywehhYFjipQgxACWOzg==',
			'letTheGamesBegin' => 'L6ByjO9I4ruvg00dW1F7zYfYgKePfdroRj1EZjT3i94/d4QazorVHMGDdL5eq3CzixnV9vbhVmWQ+s2ZkEnPGHSKysk4zCcKa6z8zJ/8DX3Q/NzO8Rr9+L4UJxmQLeX6yvb21dbqSAOCjqe+8lcUJgSKIVXZKC1N0QObVnjgof8CmCQFiWwt2zgkSniFd1x8zjZc9IvrUaYOlYciYkyZlPRK0UWF/UM0TBrcD34cb4O2a9IGMGA3gWlKWUA5yB4JZ2XhM5k660yANIhJt4tRxwhenblWB1iO6tl17BVjPDzMfiJIizzQzJSevvtAKlTcty/Hy8RcaxpnDnL+Ty2hzV5ITa1vvQR4ql04hCv4oNBz7x+tzpHPnBkDvsQDGFk3'
		];
		private $hmacKey = 'G39]23<HckvR/5q]'; //http://passwordsgenerator.net/ - don't bother
		private $input = 'intro';
		private $theTarget = '?';
		
		function __construct($input){
		
			if(!empty($input)){
				$this->input .= $input;
			}
			
		}
		
		function makeDemHappy(){
			
			$gatekeeper = $this->checkHim($this->input);
			$this->{$gatekeeper['level']}($gatekeeper['checkResult']);						 
			
		}
		
		function intro(){
		
			echo $this->aesDecrypt($this->input, $this->txtRes['intro']);
			
		}
				
		function letTheGamesBegin(){
		
			echo $this->aesDecrypt($this->input, $this->txtRes['letTheGamesBegin']);
			
		}
		
		function theSecond(){
		
			$txt = 'To bylo proste :) ';
			echo $txt;
		
		}
	
		function endgame(){
		

		}
		
		function nope($checkResult){
		
			echo  "Niestety ten hash nigdzie nie prowadzi :("
				 ."\n\n"
				 . $checkResult;
				 
		}
		
		function aesDecrypt($key, $txt){
			return mcrypt_decrypt(MCRYPT_RIJNDAEL_128, md5($key), base64_decode($txt), MCRYPT_MODE_ECB, ''); //Totaly valid AES implementation :P
		}
		
		function aesEncrypt($key, $txt){
			return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, md5($key), $txt, MCRYPT_MODE_ECB, '')); //Totaly valid AES implementation :P
		}
		
		function checkHim($secret){
			
			$checkResult = hash_hmac('sha256', $secret, $this->hmacKey);
			
			foreach($this->haxorControl as $key => $value){
	
				if($value == $checkResult){
					return array(
						'level' => $key, 
						'checkResult' => $checkResult
					);
				} 
				
			}
			
			return array(
				'level' => 'nope', 
				'checkResult' => $checkResult
			);
			
		}
		
		
	}
	
	$birthday = new Birthday( isset($argv[1]) ? $argv[1] : null );
	$birthday->makeDemHappy();