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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'StudentController@list');
Route::get('/list', 'StudentController@list');
Route::view('/add','add');
Route::post('/add', 'StudentController@add');
Route::get('/delete/{id}', 'StudentController@delete');
Route::get('/edit/{id}', 'StudentController@edit');
Route::post('/edit', 'StudentController@update');
Route::get('/search', 'StudentController@search');