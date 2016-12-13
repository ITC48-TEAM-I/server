<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;

class UserController extends Controller
{
    public function entry(Request $request)
    {
    	$data = $request->all();

    	$data['user_code'] = substr(md5($request->get('password').str_shuffle('1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')),0,7);

    	$data['token'] = $request->session()->get('_token');

    	$createData = App\User::create($data);

    	$returnData['user_code'] = $createData->user_code;

    	$returnData['token'] = $createData->token;
 
    	return response()->json($returnData);
    }
}
