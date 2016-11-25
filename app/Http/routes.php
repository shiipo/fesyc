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
//Front Routes

Route::get('/', function () {
    return view('front.index');
});

//Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){

    Route::get('/', ['as' => 'admin.index', function (){
        return view('admin.perfil.index');
    }]);

    Route::resource('usuarios','UsersController');

});

// Authentication routes...
Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as'   => 'login'
]);

Route::post('login', [
    'uses' => 'Auth\AuthController@postLogin',
    'as'   => 'login'
]);

Route::get('salir', [
    'uses' => 'Auth\AuthController@getLogout',
    'as'   => 'logout'
]);