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
    return view('index');
});

Route::get('/odonto', function () {
    return view('odonto');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/turns', 'AdminTurnController@turns')->name('admin.turns');
Route::get('/turns_json', 'AdminTurnController@turnsJson')->name('admin.turns_json');
Route::post('/courses/updateStatus', 'AdminTurnController@updateTurnStatus');