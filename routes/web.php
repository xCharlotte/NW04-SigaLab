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
    return view('welcome');
});
Route::get('/workshops', 'WorkshopController@index')->name('workshops');
Route::get('/workshop/read/{id}', 'WorkshopController@read')->name('read_workshop');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/retro', 'RetroController@index')->name('retro');

//admin prefix
Route::prefix('admin')->group(function(){
  Route::get('/dashboard', ['middleware' => 'auth', function () {
      return view('admin/dashboard');
  }]);

	//Create workshops
	Route::get('/workshop/create', 'WorkshopController@create_workshop_form')->name('create_workshop_form');
	Route::post('/workshop/create', 'WorkshopController@create')->name('create_workshop');
	//Read workshops
	Route::get('/workshops', 'WorkshopController@index')->name('workshops');
	Route::get('/workshop/read/{id}', 'WorkshopController@read')->name('read_workshop');
	//Update workshops
	Route::get('/workshop/update/{id}', 'WorkshopController@update_workshop_form')->name('update_workshop_form');
	Route::post('/workshop/update', 'WorkshopController@update')->name('update_workshop');
	//Delete workshops
	Route::get('/workshop/delete/{id}', 'WorkshopController@delete')->name('delete_workshop');
});

//CRUD - Create, Read, Update, Delete
