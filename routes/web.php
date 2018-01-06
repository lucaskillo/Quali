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

Auth::routes();

Route::group(['prefix' => ''], function () {

    Route::get('/', 'WebSiteController@home');

    Route::get('portifolio', 'WebSiteController@portifolio');

    Route::get('quemsomos', 'WebSiteController@quemsomos');

    Route::get('contato', 'WebSiteController@contato');

    Route::post('contato', 'ContatoController@postContato');

    Route::get('email', 'ContatoController@getEmail');
});

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@index');

    Route::resource('users', 'UserController', ['except' => 'show']);

    Route::resource('workshops', 'WorkshopController', ['except' => 'show']);

    Route::resource('website_generals', 'WebsiteGeneralController', ['except' => 'show']);

    Route::resource('services', 'ServiceController', ['except' => 'show']);

});

