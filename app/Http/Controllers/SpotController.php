<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Travel;
use App\Spot;
use Validator;

class SpotController extends Controller
{
    public function entry(Request $request, $travel_code){
        $travel = Travel::FindCode($travel_code)->first();
		if(!$request->exists('token') && $travel->user->token !== $request->get('token') ) return response("Forbidden",403);

		try{
    		$spots = json_decode($request->input('spots'));
		} catch(Exception $e) {
			return response("Bad Request",400);
		}
    	
		foreach ($spots as $spot) {
			$key_validator = Validator::make((array)$spot,[
				"visit_time" => "required",
				"latitude" => "required",
				"longitude" => "required",
                "spot_name" => "required",
                "site_url" => "required",
                "stay_minute" => "required",
                "category_code" => "required",
			]);
			if($key_validator->fails()) return response("Bad Request",400);
		}
		
		foreach ($spots as $spot) {
			$spot->travel_id = $travel->id;
            $spot->spot_code = substr(md5($spot->spot_name . str_shuffle('1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')),0,7);
			
			Spot::create((array)$spot);			
		}

    	return response()->json([
			"create_count" => count($spots)
		]);
    }
}
