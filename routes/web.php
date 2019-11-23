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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/events', 'EventsController@index');
Route::get('/events/new', 'EventsController@create');
Route::post('/events', 'EventsController@store'); //419 el form falta directiva @csrf
Route::get('/events/{event}','EventsController@show');
Route::delete('/events/{idevent}','EventsController@destroy');
Route::get('/events/{event}/edit','EventsController@edit');
Route::patch('/events/{idevent}', 'EventsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
