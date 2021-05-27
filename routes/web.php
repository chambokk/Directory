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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/print', 'OfficeController@print');
Route::post('/show', 'OfficeController@show');

Route::get('directories/{id}', 'OfficeController@list');
Route::post('directories/show', 'OfficeController@show');
Route::post('/provincial/show', 'ProvicialController@show');
Route::resource('/','OfficeController');
