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

Route::get('/getall','WeesataController@getall');

Route::get('/searchbynama/{nama}','WeesataController@searchbynama');
Route::get('/searchbyjenis/{jenis}','WeesataController@searchbyjenis');
Route::get('/searchbykota/{kota}','WeesataController@searchbykota');

