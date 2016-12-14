<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;
use App\Travel;

class TravelController extends Controller
{
    public function entry(Request $request,$user_code)
    {
    	//トークンの認証ってこんなんでええんか？    		
    	if(App\User::FindCode($user_code)->first()->token !== $request->get('token'))
			return response("Forbidden",403);
    	
		$req = $request->all();    	
		$user = App\User::FindCode($user_code)->first();

		$travel = Travel::create([
			"user_id" => $user->id,
			"travel_date" => $req["travel_date"],
			"latitude" => $req["latitude"],
			"longitude" => $req["longitude"],
			"area_name" => $req["area_name"],
			"country_name" => $req["country_name"],
			"travel_code" => substr(md5($request->get('area_name').str_shuffle('1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')),0,7)  
		]) ;

		return response()->json([
			"travel_code" => $travel->travel_code
		]);
    	
    }
}
