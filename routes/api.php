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

// api/user
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// api/events
Route::get('/events',function(){
    return response()->json(\App\Event::paginate(10));
});

// api/login
Route::post('/login',function(Request $request){
    return response()->json($request->all());
});
