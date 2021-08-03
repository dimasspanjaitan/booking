<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    function json_return($state,$data ='',$message = '',$code = 200){
	    return \Response::json([
	        'status' => $state,
	        'data' => $data,
	        'message' => $message,
	    ], $code);
	}
}
