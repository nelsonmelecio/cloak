<?php

namespace App\Http\Helpers;

use Session;
use Carbon\Carbon;

class FormHelper 
{
	private static $prefix = "abc_";

	public static function cloak($keyword) 
	{
		$crypto_string = self::setSessionOnCloak($keyword);

		return $crypto_string;
	}

	public static function unCloak($inputs) 
	{
       	$new_request = array();
   		foreach ($inputs as $key => $value) 
   		{ 
    		if( strpos( $key, self::$prefix ) !== false ) 
    		{
    			$all_inputs = Session::all();
    			foreach ($all_inputs as $key2 => $value2) 
    				if($key == $value2)
    					$new_request[$key2] = $value;		
    		} 
    		else 
    			$new_request[$key] = $value;
    	}

    	return $new_request;
	}


	private static function setSessionOnCloak($keyword) 
	{
		$session_id = Session::getId();
		$app_key = env('APP_KEY');
		$timestamp = Carbon::now()->timestamp;
		$crypto_string = self::$prefix . sha1($session_id . $keyword . $app_key . $timestamp);

	    Session::put($keyword, $crypto_string);

		return $crypto_string;
	}

	
}