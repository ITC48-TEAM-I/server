<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;
use App\Route;
use Validator;

class RouteController extends Controller
{
    public function entry(Request $request,$travel_code)
    {
    	//json_decodeがうまく動かず。Laravelのドキュメントにjsonはこんな風に受け取るっぽい書き方してた    		
		$travel = App\Travel::FindCode($travel_code)->first();
		if(!$request->exists('token') && $travel->user->token !== $request->get('token') ) return response("Forbidden",403);

		try{
    		$routes = json_decode($request->input('routes'));
		} catch(Exception $e) {
			return response("Bad Request",400);
		}
    	
		foreach ($routes as $route) {
			$key_validator = Validator::make((array)$route,[
				"transit_time" => "required",
				"latitude" => "required",
				"longitude" => "required",				
			]);
			if($key_validator->fails()) return response("Bad Request",400);
		}
		
		foreach ($routes as $route) {
			$route->travel_id = $travel->id;
			
			Route::create((array)$route);			
		}

    	return response()->json([
			"create_count" => count($routes)
		]);
    }
}
