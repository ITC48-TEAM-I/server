<?php

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
Route::post('/api/users', function() {

});

/*ユーザー認証*/
Route::post('/api/auth', function() {

});

/*旅行登録*/
Route::post('/api/users/{ user_code }/travels', function() {

});

/*旅行一覧取得*/
Route::get('/api/user{ user_code }/travels', function() {

});

/*旅行取得*/
Route::get('/api/travels/{ travel_code }', function() {

});

/*道順登録*/
Route::post('/api/travels/{ travel_code }/routes', function() {

});

/*立ち寄った場所登録*/
Route::post('/api/travels/{ travel_code }/spots', function() {

});

/*立ち寄った場所更新*/
Route::put('/api/spots/{ spot_code }'. function() {

});
