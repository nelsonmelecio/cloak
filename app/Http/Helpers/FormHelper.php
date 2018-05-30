<?php

namespace App\Http\Helpers;

use Session;
use Carbon\Carbon;

class FormHelper 
{
	private static $prefix = "abc_";

	public static function cloak($keyword) 
	{
		$crypto_string = self::setSessionForCloaking($keyword);

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
    			foreach ($all_inputs as $key_original => $value_original) 
    				if($key == $value_original)
    					$new_request[$key_original] = $value;		
    		} 
    		else 
    			$new_request[$key] = $value;
    	}

    	return $new_request;
	}

	private static function setSessionForCloaking($keyword) 
	{
		$session_id = Session::getId();
		$timestamp = Carbon::now()->timestamp;
		$crypto_string = self::$prefix . sha1($keyword . $session_id . $timestamp );

	    Session::put($keyword, $crypto_string);

		return $crypto_string;
	}
	
}