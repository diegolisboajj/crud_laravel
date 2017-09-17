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

//Route::get('/', function () {
 //   return view('welcome');
//});


Route::get('/', 'UsuariosController@index');

Route::get('itemCRUD/create', 'UserController@create')->name('itemCRUD.create');
Route::get('itemCRUD/show', 'UserController@show')->name('itemCRUD.show');
Route::get('itemCRUD/edit', 'UserController@edit')->name('itemCRUD.edit');
Route::get('itemCRUD/destroy', 'UserController@destroy')->name('itemCRUD.destroy');

