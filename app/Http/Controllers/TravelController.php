<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;

class TravelController extends Controller
{
    public function entry(Request $request,$user_code)
    {
    	//トークンの認証ってこんなんでええんか？
    	
    	$data = $request->all();

    	$token = $request->get('token');

    	if(App\User::FindCode($user_code)->first()->token == $token)
    	{
    		$data['user_id'] = App\User::FindCode($user_code)->first()->id;

    		$data['travel_code'] = substr(md5($request->get('area_name').str_shuffle('1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')),0,7);

    		$data = App\Travel::create($data);

    		return response()->json($data->travel_code);
    	}
    	else
    	{
    		return response()->json('token mismatch');
    	}
    }
}
