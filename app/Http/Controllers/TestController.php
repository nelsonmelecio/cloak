<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Helpers\FormHelper;
use Session;

class TestController extends Controller
{
    public function index()
    {
    	return view('test');
    }

    public function store(Request $request) 
    {
		$new_request = FormHelper::unCloak($request->all());

        // Your code here using $new_request as the final decoded inputs from $request

        $data = array();
        $data['cloaked_inputs'] = $request->all();
        $data['new_inputs'] = $new_request;

        return view('test', $data);

    }
}
