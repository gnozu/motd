<?php

Class QuickCurl {

	public static function get($url, $params = array()){
		return static::curl($url, $params, false);
	}
	public static function post($url, $params = array()){
		return static::curl($url, $params, true);	
	}
	public static function curl($url, $params, $post = false){
		// No url? fail
		if (empty($url)) return false;	
		// make get string if not posting
		if (!$post && !empty($params)) {
			$url = $url . "?" . http_build_query($params);
		}

		$curl = curl_init($url);

		// Postify
		if ($post) {
			curl_setopt($curl, CURLOPT_POST, true);	
			curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
		} 

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 3);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		// Via Advocate?
		if(defined('LOCAL') && LOCAL == true){
			//do not use advocate when in local dev envirenment
		}
		else{
			curl_setopt($curl, CURLOPT_PROXY, 'advocate.kent.ac.uk');
      		curl_setopt($curl, CURLOPT_PROXYPORT, 3128);
		}
        
        

		$data = curl_exec($curl);

		$http_code = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);

		return array('data' => $data, 'http' => $http_code);
	}
}