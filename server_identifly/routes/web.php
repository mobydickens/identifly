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

Route::get('/butterflies', 'ButterflyController@getAll');
Route::get('/types', 'ButterflyController@getTypes');
Route::get('/sighting', 'ButterflyController@getSighting');
Route::post('/new', 'ButterflyController@create');
