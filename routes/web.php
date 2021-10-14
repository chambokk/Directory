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

Route::get('/', 'OfficeController@index');
Auth::routes();

Route::get('/print', 'OfficeController@print');
Route::get('/show/{id}', 'OfficeController@show');

Route::get('directories/{id}', 'OfficeController@list');
Route::post('directories/show', 'OfficeController@show');
Route::post('/provincial/show', 'ProvicialController@show');
Route::resource('office','OfficeController')->except(['index']);
Route::get('/add', 'OfficeController@add');
Route::post('/add1', 'OfficeController@add1')->name('add1');

Route::get('directories/create', 'OfficeController@create');

// route to addoffice
Route::resource('addoffice', 'AddofficeController');
Route::post('addoffice/edit_office', 'AddofficeController@edit_office')->name('edit_office');
Route::post('addoffice/update_office', 'AddofficeController@update_office')->name('update_office');
// Route::post('addoffice/delete_office', 'AddofficeController@delete_office')->name('delete_office');



// route for create new directory
Route::middleware(['admin'])->group(function() {

    Route::resource('create', 'DirectoryController');
    Route::post('update_password', 'DirectoryController@update_password'); 
});

Route::post('create/edit_directory', 'DirectoryController@edit_directory');
Route::post('create/delete_directory', 'DirectoryController@delete_directory')->name('delete_directory');
Route::post('create/update_directory', 'DirectoryController@update_directory')->name('update_directory');

//route for baranggay
Route::resource('baranggay', 'BaranggayController');

Route::post('get_category', 'CategoryController@index')->name('get_category');


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
