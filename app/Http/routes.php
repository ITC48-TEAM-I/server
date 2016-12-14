<?php

use App\MockData;
use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*ユーザー登録*/
Route::post('/api/users', ['as' => 'post-user-entry','uses' => 'UserController@entry']);

/*ユーザー認証*/
Route::post('/api/auth', function() {

});

/*旅行登録*/
Route::post('/api/users/{user_code}/travels', ['as' => 'post-travel-entry','uses' => 'TravelController@entry']);

/*旅行一覧取得*/
Route::get('/api/users/{user_code}/travels', function($user_code) {
    $mock = new MockData();
    return response()->json($mock->travelList);
});

/*旅行取得*/
Route::get('/api/travels/{travel_code}', function() {

});

/*道順登録*/
Route::post('/api/travels/{travel_code}/routes',['as' => 'post-route-entry','uses' => 'RouteController@entry']);

/*立ち寄った場所登録*/
Route::post('/api/travels/{travel_code}/spots', 'SpotController@entry');

/*立ち寄った場所更新*/
Route::put('/api/spots/{spot_code}', function() {

});
