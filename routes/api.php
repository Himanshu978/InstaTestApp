<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/testData', function(){
    return [
        'username' => 'himanshu',
        'age' => 22,
        'city' => 'delhi'
    ];
});

Route::post('/postData', function(Request $request){
    return $request->all();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



