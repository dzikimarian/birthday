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
			'theSecond' => '86a5518268c6d50660ee6e9e0ed17d2a9958c1bf896bfcfc95079a3d87bcd515',
			'someMath' => 'b9886eeb367102a85262e2bdc053a1480e0b9479184181a37d3de08275acc81c',
			'endgame' => '8dfc6262b7a99aea4b670c976246e598559b46c8f8c170e890138f9166e4a599'
		];
		private $txtRes = [
			'intro' => 'kru8LLBr1XxwDzOrXZjZakc5YWMPRUkP0NIb4YEqSzQpE/mOL7PriJzAxGwIK4d6XIIpdv1Zd2F/XIgPUVx8/kzVL4zgbMvVUoTPeZawcKuZueXhUhauz1cwz2Oh1qQ6T8/auHz+YcAT7qJQRvi+WS8FgJSqG2LV8ZNpMzCKsHUaZDGn2zua56NpwftgrUjsxmkmtHzddyi/gyAfq+N62HBkezHuZXHo3FepJq33WPYQIa6CD+Ou9amZGzNHF0x8suAXjkIPcuj67XAdjku0oAdtHN4t5hqUnWtsPKWUn+HXhAag3eVz/+yHS8SpTdoACEykTHIwu4JyathnRmjCYEmmhCFT2yCLhjb3vR3iu80FIXZIImP8HppM8AWeOUvF9/FRQbEtv0L9fuzGY8qyTWWhBufUWXrFzWCDhpjf5cMm6F1F6Ngdxxrlj9UWN82CTf1IwdzExRWll6MtEr6RzwzhPf5qi+5aqxUFuV6bH6p8XJ/bZN4hIp+WdWydbnS2957debt0pt/2SeQT/zk10rvNd+oeDlyfaeF5/CRbNDWM2tebhSaYbBxd3WFwxmvz/NIdebLJ8b9PBTrzN7mu+/p5OCnIEhEM/OYO2WpRpFSdaelb5xR2NZLSqLQLBRGU1+8ywehhYFjipQgxACWOzg==',
			'letTheGamesBegin' => 'L6ByjO9I4ruvg00dW1F7zYfYgKePfdroRj1EZjT3i94/d4QazorVHMGDdL5eq3CzixnV9vbhVmWQ+s2ZkEnPGHSKysk4zCcKa6z8zJ/8DX3Q/NzO8Rr9+L4UJxmQLeX6yvb21dbqSAOCjqe+8lcUJgSKIVXZKC1N0QObVnjgof8CmCQFiWwt2zgkSniFd1x8zjZc9IvrUaYOlYciYkyZlPRK0UWF/UM0TBrcD34cb4O2a9IGMGA3gWlKWUA5yB4JZ2XhM5k660yANIhJt4tRxwhenblWB1iO6tl17BVjPDzMfiJIizzQzJSevvtAKlTcty/Hy8RcaxpnDnL+Ty2hzV5ITa1vvQR4ql04hCv4oNBz7x+tzpHPnBkDvsQDGFk3',
			'theSecond' => 'J4szTPmh+3EyG2w7Zu2jTM8DNg/S0upbvdK8QkP0vzbLWFwwpWpH5497sRRb/K9ZL/aZTyu12obg3ncRvjbiTS6iZg4t2XNOMwITLDJUtXUuEdtGO5olpoacgALyjbKfRWa47ZPzaLpxozCj0Kwxj9mvgejxPa60T3qlWz87PraiuPkKRj4OUaY3q1cYoIq947UdGZbCMHJEdIirYSSMFrwYRVHVkhOwp38q1CJ9PPnrpsy/UXxhARgy3rwAtZZlZZCUvvYTBSJhAYUBvSI7dmVCM+OBeLRnB0iw3ar9LJxix6unq0QRt5xvuqBosyMEWv2oAHL0q8bjJjP+TbkCs0WigoZTkZoBnqXLJ8Y2pX1wS0EiFGPKNVkr00yzHf7K1XJW+OjSjMgWjn0V+qX7xsxCPEdDn7nFvr/+vRuGxamyj5exmfP439+40Topb6XnUITs8TOUCJ4dwEZcVAjPb9O9z3yFQURQXclDgJVQNfI=',
			'someMath' => 'xxXDRtMt5nls9Me5z+njhIH7RVsYLGVRrk1fChsS5sZ5qYjmGZXeDC8Q31hAfOWzLB70mYDlDFQOVO5axGylc1QqnAI3v3U4QJuopUpn2c6YajTWrW4IXH31ZzyqTdQhHJb61JX7ow5xeLUtlUyG24O8aGG8hZ4Wngeyr0nfdYLIs/nejnKc1Bhva04MFwbejV9cdsUBOv10URpneuLsz89RenG6kizCvMl5S7iJ/SfP+S7RrrftEkMaVn8JPeSeYndi9jEx+TW0S+F5nOw/nLIhij8/R+zPQusEoyPtJi37ggcLGN+zz/+T48MKBcsPiw2RstXMiWpk9UMJOc77LLOjz2Ao731XdeINgrBQsh0d09zuTbT1kWeqfQradsV94kCqroxLhH1ediubiKACiC1J3aHW1uQbhE919m5VF7AqTUsknP40ZuC6XR7c1HCIh1Y4YE7dOnmb7/pocOvEQk9Obxd181+4Ic2U2jPuvwRnq538vW51xzNQsWyyTw9ayLIS+NIyCTFQXaxQKBCa3Io7iYJuU/Wm3steVr2xmMlZUhCctYkID+DFIlxUlnzgOoa6uXK7PSZkMfDXiS1lh1htcFAqkbIDJlOA52EjPXzcAKMmCcuCH4jF8EaHyKBhVCY8kjPzE1a9hvcy8UPC2QRfLuib2fQza7O+XSs/Qem3I8e6N2X41PkgD49LuLewcrpiPDxuK8K29sJtAnYyb1K+d040e9KvXGec1yb6zNMxF1+GM1dm2YOCZMsIiFj4D9cJ5SoIWlG1cr03vUlXEdOdjus46phaA8Q+t2s4ZYe3d/z51Rag4t6UHdxHUY0x8X1AlkFhFHknG5aFLcVGziMYh7r3Ki4TDRhsn3II1u+pKYw0c0hK75uA0h9kZ76NTh2c0z5ci6LPyHrmGA9dBNZZ7b6NiEh6iWYP9PUwbqA=',
			'endgame' => 'ricGh+d31YNfm0ZtCvRf/gVB/nXldjzlp07k9D0pGXXXF6mtqJdGA3PhclQ9xF0nb7YJ0hO1ktLsJDWHMem4pA=='
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
		
			echo $this->aesDecrypt($this->input, $this->txtRes['theSecond']);
		
		}
	
		function someMath(){
			echo $this->aesDecrypt($this->input, $this->txtRes['someMath']);
		}
	
		function endgame(){
			echo $this->aesDecrypt($this->input, $this->txtRes['endgame']);
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