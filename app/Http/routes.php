<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'MainController@showIndex');
Route::get('/about', 'MainController@showAbout');
Route::get('/create', 'MainController@showCreation');
Route::post('/create', 'MainController@createDuel');
Route::get('/duel/{id}', 'MainController@showGame');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::post('/duel/{id}/modify/{id2}', 'MainController@modifyPlayer');
