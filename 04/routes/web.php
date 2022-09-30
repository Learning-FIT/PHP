<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'IndexController@index');
Route::post('/', 'IndexController@post');

Route::get('/message','MessageController@index');
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@post');

Route::get('/detail/{id}', 'DetailController@index');
Route::post('/detail/{id}', 'DetailController@post');

Route::get('/manage', 'ManageController@index');
Route::post('/manage', 'ManageController@post');
Route::delete('/manage', 'ManageController@delete');
