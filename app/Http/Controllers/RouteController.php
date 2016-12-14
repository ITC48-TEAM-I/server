<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;

class RouteController extends Controller
{
    public function entry(Request $request,$travel_code)
    {
    	//json_decodeがうまく動かず。Laravelのドキュメントにjsonはこんな風に受け取るっぽい書き方してた
    	
    	$data['transit_time'] = $request->input('routes.0.transit_time');
    	$data['latitude'] = $request->input('routes.0.latitude');
    	$data['longitude'] = $request->input('routes.0.longitude');
		$data['travel_id'] = App\Travel::FindCode($travel_code)->first()->id;

    	$token = $request->get('token');

    	$routeData = App\Route::create($data);

    	$returnData = App\Route::where('travel_id',$routeData->travel_id)->count();

    	return response()->json($returnData);
    }
}
