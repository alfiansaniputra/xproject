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
    return view('utama');
});


// Route::resource('harga', 'HargaController');
// Route::resource('daily', 'DailyController');
// Route::resource('keuangan', 'KeuanganController');
// Route::resource('produksi', 'ProduksiController');
//baru
Route::resource('barang', 'BarangController');
Route::resource('belanja', 'BelanjaController');


// Route::get('daily/{id}/detail','DailyController@show');


// Route::get('filter','UtamaController@index');

// Route::resource('datainventaris', 'DailyController');
