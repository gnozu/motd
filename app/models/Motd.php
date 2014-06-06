<?php

class Motd {

	// Get all
	public static function all(){
		return json_decode(static::_request(''));
	}

	// Do request
	public static function _request($endpoint){
		$url_options = '';
		if(isset($_GET['disablecache'])) $url_options='?disablecache';

		$query = QuickCurl::get( API_URL . '/v1/motd/'.$endpoint.$url_options);
		return $query['data'];
	}
	
}