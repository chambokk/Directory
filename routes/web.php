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
Route::get('/add', 'OfficeController@add');
Route::post('/add1', 'OfficeController@add1')->name('add1');

Route::get('directories/create', 'OfficeController@create');

// route to addoffice
Route::resource('addoffice', 'AddofficeController');
Route::post('addoffice/delete_office', 'AddofficeController@delete_office')->name('delete_office');

// route for create new directory
Route::resource('create', 'DirectoryController');
Route::post('create/edit_directory', 'DirectoryController@edit_directory');
Route::post('create/delete_directory', 'DirectoryController@delete_directory')->name('delete_directory');
Route::post('create/update_directory', 'DirectoryController@update_directory')->name('update_directory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
