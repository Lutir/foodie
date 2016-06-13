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

Route::get('/home', function () {
    return view('site.index');
});

Route::get('/admin', 'AdminController@makeAdmin');
Route::get('/home/menuSelect', 'MainController@viewMenu');
Route::get('/home/order/{name}', 'MainController@viewPlace');
Route::post('addName','AdminController@addName');
Route::post('addMenuItem','AdminController@addMenuItem');
Route::post('viewAll','AdminController@viewAll');
Route::post('removeName','AdminController@removeName');



