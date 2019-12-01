<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'CategoriesController@index');

Route::get('/events', 'EventsController@index');
Route::get('/events/new', 'EventsController@create');//->middleware('auth','role:1');
Route::post('/events', 'EventsController@store'); //419 el form falta directiva @csrf
Route::get('/events/{event}','EventsController@show');
Route::delete('/events/{idevent}','EventsController@destroy');//->middleware('auth','role:1');
Route::get('/events/{event}/edit','EventsController@edit');//->middleware('auth','role:1');
Route::patch('/events/{idevent}', 'EventsController@update');
Route::get('/categories/{categoryName}', 'CategoriesController@show');
Route::get('/categories/{categoryName}', 'CategoriesController@indexReq');
Route::get('/compra/compra', 'CategoriesController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
