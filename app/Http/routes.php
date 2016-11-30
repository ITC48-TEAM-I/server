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


Route::get('/', function () {
    return view('welcome');
});

use Illuminate\Http\Request; 
use Illuminate\Http\Response;
use GuzzleHttp\Client;

/*Yahoo!ローカルサーチAPI http://developer.yahoo.co.jp/webapi/map/openlocalplatform/v1/localsearch.html*/
Route::get('/api/yahoo/localsearch', function(Request $request) {
    $client = new Client();
    $res = $client->get(
        'http://search.olp.yahooapis.jp/OpenLocalPlatform/V1/localSearch',
        [
            'query' => array_merge(['appid' => env('YAHOO_APP_ID')], $request->all())
        ]);
    $state = $res->getStatusCode();
    $xml = $res->getBody()->getContents();
    
    return response($xml, $state)->header('Content-Type', 'application/xml');
});

/*場所情報API　http://developer.yahoo.co.jp/webapi/map/openlocalplatform/v1/placeinfo.html*/
Route::get('/api/yahoo/place', function(Request $request) {
    $client = new Client();
    $res = $client->get(
        'http://placeinfo.olp.yahooapis.jp/V1/get',
        [
            'query' => array_merge(['appid' => env('YAHOO_APP_ID'), 'output' => 'xml'], $request->all())
        ]);
    $state = $res->getStatusCode();
    $xml = $res->getBody()->getContents();
    
    return response($xml, $state)->header('Content-Type', 'application/xml');
});