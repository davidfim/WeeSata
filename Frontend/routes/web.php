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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/detail', function () {
//     return view('detail');
// });

// Route::get('/wisata', function () {
//     return view('wisata');
// });


Route::get('/', 'WisataController@index')->name('home');
Route::get('/wisata', 'WisataController@wisata')->name('wisata');

Route::post('/wisata', 'WisataController@cariWisata')->name('cari');

Route::get('/cari-wisata/{nama}/{kategori}/{lokasi}', 'WisataController@hasilWisata')->name('hasil');
//Route::get('/wisata/cari?{nama}+{kategori}+{lokasi}', array('uses' => 'WisataController@hasilWisata'))->name('hasil');

Route::get('/wisata/{id}', 'WisataController@detail')->name('detail');


Route::post('/searchkondisi','WisataController@searchkondisi');
