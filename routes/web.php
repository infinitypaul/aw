<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//Route::controller('/', 'HomeController');
//Route::get('/', ['as' => 'index', 'uses' => 'HomeController@getIndex']);
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', ['as' => 'index', 'uses' => 'HomeController@getIndex']);

Route::get('/about', ['as' => 'about', 'uses' => 'HomeController@getAbout']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'HomeController@getContact']);

Route::get('/pricing', ['as' => 'pricing', 'uses' => 'HomeController@getPricing']);

Route::get('/services', ['as' => 'services', 'uses' => 'HomeController@getServices']);

Route::get('/faq', ['as' => 'faq', 'uses' => 'HomeController@getFaq']);

Route::get('/blog', ['as' => 'blog', 'uses' => 'HomeController@getBlog']);

Route::get('/blog', ['as' => 'blog', 'uses' => 'HomeController@getBlogs']);

Auth::routes();

Route::get('/home', 'HomeController@index');
